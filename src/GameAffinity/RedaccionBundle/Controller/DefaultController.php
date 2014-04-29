<?php

namespace GameAffinity\RedaccionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use GameAffinity\JuegoBundle\Entity\Juego;
use GameAffinity\JuegoBundle\Form\Redaccion\JuegoType;

class DefaultController extends Controller {

    public function loginAction(Request $request) {
        $session = $this->container->get('session');
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $session->get(SecurityContext::AUTHENTICATION_ERROR));
        $session->remove(SecurityContext::AUTHENTICATION_ERROR);

        $response = $this->render('RedaccionBundle:Default:login.html.twig', array(
            'error' => $error,
            'last_username' => $session->get(SecurityContext::LAST_USERNAME)
        ));

        return $response;
    }

    //muestra todos los juegos reseñados por el redactor
    public function portadaAction($redactor) {

        //$user = $this->getUser();
        $redactor = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('RedaccionBundle:Redaccion')
                ->findRedactorByUsername($redactor)
                ;
        $juegosByRedactor = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('JuegoBundle:Juego')
                ->findJuegosByRedactor($redactor)
        ;
        $response = $this->render('RedaccionBundle:Default:portada.html.twig', array(
            'redactor' => $redactor,
            'juegos' => $juegosByRedactor
        ));

        return $response;
    }

    public function nuevoAction(Request $request) {
        //formulario para crear una nueva entrada en las reseñas
        $juego = new Juego();
        $form = $this->createForm(new JuegoType(), $juego);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $manager = $this->getDoctrine()->getManager();
            $juego->setVotos('300');//solo a modo de prueba
            
            
            

            $juego->setRedaccion($this->getUser());
            if (null !== $form->get('uploaded_foto')->getData()) {
                $ruta_destino = $this->container->getParameter('gameaffinity.ruta.imagenes');
                $juego->subirfoto($ruta_destino);
            }
            
             $manager->persist($juego);
             
            if(count($juego->getFotosSecundarias())>1){
                foreach($juego->getFotosSecundarias() as $foto){
                    $foto->subirFoto($ruta_destino);
                    $foto->setJuego($juego);
                    $manager->persist($foto);
                    
                }
            }
            
           
            
            
           
            $manager->flush();
            
           // $idObjec= $aclprovider->

            return $this->redirect($this->generateUrl('portada_redaccion', array(
                'redactor' =>  $this->getUser()->getUsername()
            )));
        }

        $response = $this->render('RedaccionBundle:Default:form.html.twig', array(
            'form' => $form->createView()
        ));

        return $response;
    }

    public function editarAction($slug) {
        $juego = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('JuegoBundle:Juego')
                ->findJuego($slug)
        ;
        //formulario para editar
    }

    //elimina un juego, el nombre del juego es pasado como post en una peticion AJAX asi que el argumento
    //de la funcion es un request. La eliminacion es simplmnt una deshabilitacion del juego, no se elimina
    //directamente de la base de datos
    public function eliminarAction(Request $req) {

        if ($req->isXmlHttpRequest()) {
            $slug = $req->request->get('slug');
            $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('JuegoBundle:Juego')
                    ->desactivarJuego($slug)

            ;

            return 'ok';
        }
    }

}
