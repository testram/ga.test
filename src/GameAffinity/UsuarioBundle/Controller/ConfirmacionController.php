<?php

namespace GameAffinity\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class ConfirmacionController extends Controller {

//put your code here
    public function confirmacionAction($user) {

        $session = $this->container->get('session');

        //si ya confirmo la cuenta
        if (null === $user->getCodigoConfirmacion()) {

            $session->getFlashBag()->add('info', 'Tu cuenta ' . $user->getEMail() . ' ya habia sido confirmada');
            return $this->redirect($this->generateUrl('portada'));
        }


        $manager = $this->getDoctrine()->getManager();
        $user->setFechaBaja()->setActivo(true)->setCodigoConfirmacion();
        $manager->persist($user);
        $manager->flush();
        $session->getFlashBag()->add('info', 'Cuenta confirmada Mensaje 1');
        return $this->redirect($this->generateUrl('portada'));
    }

    public function confirmacionOfflineAction($cid, $codigo_confirmacion) {
       
        $manager = $this->getDoctrine()->getManager();
        $user =  $manager->getRepository('UsuarioBundle:Usuario')->findUserByCid($cid);

        if ($codigo_confirmacion != $user->getCodigoConfirmacion()) {
            $this->get('session')->getFlashBag()->add('info', 'Usted no es un usuario legitimo');
            return $this->redirect($this->generateUrl('portada'));
        }

        if (null === $user->getFechaBaja()) {
            $this - get('session')->getFlasBag()->add('info', 'Tu cuenta <strong>' . $user->getMail() . '</strong> ya habia sido confirmada');
            return $this->redirect($this->generateUrl('portada'));
        }
        
        $user
                ->setActivo(true)
                ->setFechaBaja()
                ->setCodigoConfirmacion();
        $manager->persist($user);
        $manager->flush();

       $token = new UsernamePasswordToken($user, $user->getPassword(), 'usuarios', $user->getRoles());
       $this->container->get('security.context')->setToken($token);

        $this->container->get('session')->getFlashBag()->add('info', 'Cuenta confirmada Mensaje 2');
        return $this->redirect($this->generateUrl('portada'));
    }

}
