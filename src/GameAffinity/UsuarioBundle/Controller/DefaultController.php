<?php

namespace GameAffinity\UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\Request;
use GameAffinity\UsuarioBundle\Entity\Usuario;
use GameAffinity\UsuarioBundle\Form\Frontend\UsuarioType;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class DefaultController extends Controller {

    public function loginAction(Request $request) {


        if ($this->container->get('security.context')->isGranted('ROLE_USUARIO')) {
            $user = $this->container->get('security.context')->getToken()->getUser();

            $response = $this->forward('UsuarioBundle:Confirmacion:confirmacion', array(
                'user' => $user
            ));
            return $response;
        } elseif ($request->query->get('cid')) {

            $cid = $request->query->get('cid');
            $codigo_confirmacion = $request->query->get('c');          

            $response = $this->forward('UsuarioBundle:Confirmacion:confirmacionOffline', array(
                'cid' => $cid,
                'codigo_confirmacion' => $codigo_confirmacion
            ));
            return $response;
        }

        $sesion = $request->getSession();
        $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR, $sesion->get(SecurityContext::AUTHENTICATION_ERROR));
        $sesion->remove(SecurityContext::AUTHENTICATION_ERROR);

        return $this->render('UsuarioBundle:Default:login.html.twig', array(
                    'last_username' => $sesion->get(SecurityContext::LAST_USERNAME),
                    'error' => $error
        ));
    }

    public function registroAction(Request $request) {

//$usuario = $this->getDoctrine()->getManager()->getRepository('UsuarioBundle:Usuario')->find(199);
//$usuario->setNombre('ramiroquai');
        $usuario = new Usuario();
        $formulario = $this->createForm(new UsuarioType(), $usuario);
        $formulario->handleRequest($request);
        if ($formulario->isValid()) {

            $manager = $this->getDoctrine()->getManager();

            $usuario->setUltimoAcceso(new \DateTime());
            $usuario->setSalt(md5(time()));
            $encoder = $this->get('security.encoder_factory')->getEncoder($usuario);
            $password = $encoder->encodePassword($usuario->getPassword(), $usuario->getSalt());
            $usuario->setPassword($password);
            $usuario->setRole('ROLE_USUARIO');

//si el usuario no subio ninguna foto entonces se le asignara una por defecto
            if (null === $formulario->get('uploaded_foto')->getData()) {
                $imagen_por_defecto = $this->container->getParameter('gameaffinity.imagen.por.defecto');
                $usuario->setFoto($imagen_por_defecto);
            } else {//de lo contrario asignar la foto que subió
                $ruta = $this->container->getParameter('gameaffinity.ruta.imagenes');
                $usuario->subirFoto($ruta);
            }

            $usuario->setActivo(true); //es activo temporalmente
            $usuario->setFechaAlta(new \DateTime());
            $usuario->setfechaBaja(new \DateTime('today + 6 days')); //activo hasta dentro de seis dias
            $manager->persist($usuario);
            $manager->flush();

//email de verificacion //Voy por aqui
            $mensaje = \Swift_Message::newInstance()
                    ->setSubject('Solo te queda un paso para confirmar tu cuenta en Gameaffinity')
                    ->setFrom('amprengi_e@hotmail.com')
                    ->setTo($usuario->getEmail())
                    ->setBody($this->render('UsuarioBundle:Default:confirmacion-registro.html.twig', array(
                        'usuario' => $usuario
                    )), 'text/html')
            ;
            $this->container->get('mailer')->send($mensaje);


//autenticacion temporal del usuario recien creado
            $token = new UsernamePasswordToken(
                    $usuario, $usuario->getPassword(), 'usuarios', $usuario->getRoles()
            );

//asignar el token
            $this->container->get('security.context')->setToken($token);
//mensaje flash
            $this->get('session')->getFlashBag()->add('info', 'Aun te falta un paso. Confirma tu cuenta a traves de tu correo');
//redireccion a la portada
            return $this->redirect($this->generateUrl('portada'));
        }

        return $this->render('UsuarioBundle:Default:registro.html.twig', array(
                    'formulario' => $formulario->createView()
        ));
    }

    public function perfilAction($username) {

        $repositoryUsuario = $this->getDoctrine()->getManager()->getRepository('UsuarioBundle:Usuario');
        $repositoryValoracion = $this->getDoctrine()->getManager()->getRepository('ValoracionBundle:Valoracion');
        $usuario = $repositoryUsuario->findPerfil($username);
        $criticas = $repositoryValoracion->findValoracionesPorUsuario($usuario);


        $response = $this->render('UsuarioBundle:Default:perfil.html.twig', array(
            'criticas' => $criticas,
            'usuario' => $usuario
        ));
        return $response;
    }

    public function recientesAction() {

//buscar juegos en sesion
        if ($this->get('security.context')->isGranted('ROLE_USUARIO')) {


            $recientes = $this->get('session')->get('recientes', array());


            $repository = $this->getDoctrine()->getManager()->getRepository('JuegoBundle:Juego');
            $_recientes = array(); //es un array de objetos (juegos)
//buscar cada juego por id
            foreach ($recientes as $reciente) {

                $juego = $repository->findJuegoPorId($reciente);
                array_push($_recientes, $juego);
            }
        } else {
            $_recientes = array();
        }



        $response = $this->render('UsuarioBundle:Default:recientes.html.twig', array(
            'recientes' => $_recientes
        ));

        return $response;
    }

}
