<?php

namespace GameAffinity\ValoracionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GameAffinity\ValoracionBundle\Form\Frontend\ValoracionType;
use GameAffinity\ValoracionBundle\Entity\Valoracion;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;

class DefaultController extends Controller
{
     public function valoracionFormAction(Request $request, $juego) {

        $manager = $this->getDoctrine()->getManager();
        $juego = $manager->getRepository('JuegoBundle:Juego')->findJuego($juego);
        $valoracion = new Valoracion();
        $form = $this->createForm(new ValoracionType(), $valoracion);

        $form->handleRequest($request);

        if ($form->isValid()) {

            if ($this->container->get('security.context')->isGranted('ROLE_REDACCION')) {
                $valoracion->setRedactor($this->getUser());
            } else {
                $valoracion->setUsuario($this->getUser());
            }
            $valoracion->setRevisado(TRUE); //solo para pruebas
            $valoracion->setPuntaje($form->get('calificacion')->getData()); //esto es solo para pruebas
            $valoracion->setPost($juego);
            $manager->persist($valoracion);
            $manager->flush();

            $aclprovider = $this->get('security.acl.provider');
            $ObjectIdentity = ObjectIdentity::fromDomainObject($valoracion);
            $UserSecurityIdentity = UserSecurityIdentity::fromAccount($this->getUser());

            $acl = $aclprovider->createAcl($ObjectIdentity);
            $acl->insertObjectAce($UserSecurityIdentity, MaskBuilder::MASK_OPERATOR);
            $aclprovider->updateAcl($acl);

            $this->container->get('session')->getFlashBag()->add('info', 'Su comentario fue enviado y sera publicado en cuanto sea revisado');

           return $this->redirect($this->generateUrl('review', array(
               'juego' => $juego->getSlug()
           )));

            
        } else {

            $response = $this->render('ValoracionBundle:Default:critica.html.twig', array(
                'form' => $form->createView(),
                'juego' => $juego
            ));

            return $response;
        }
    }

}
    

