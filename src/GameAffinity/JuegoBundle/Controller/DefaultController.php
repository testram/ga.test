<?php

namespace GameAffinity\JuegoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


//use Symfony\Component\Security\Core\SecurityContext;
//use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    //la portada
    public function portadaAction() {

        $param = $this->container->getParameter('GameAffinity.numero_juegos_por_portada');

        $repositorio = $this->getDoctrine()->getManager()->getRepository('JuegoBundle:Juego');


        $juegosEstreno = $repositorio->findJuegosEstreno($param);
        /*if (!$juegosEstreno) {
            throw $this->createNotFoundException('No hubo juegos');
        }*/


        $response = $this->render('JuegoBundle:Default:portada.html.twig', array(
            'juegosNuevos' => $juegosEstreno
                //'juegosProximos'=>$juegosProximos,
                //'juegosAntiguos'=>$juegosAntiguos
        ));
        return $response; //->setMaxAge(3600 * 24);
    }

    //lista total de los estrenos
    public function listaTotalEstrenosAction($tipo_lista) {

        //los juegos son traidos de una vez (solo una consulta a la base de datos)
        $juegos = $this->
                getDoctrine()->
                getManager()->
                getRepository('JuegoBundle:Juego')->
                findJuegosEstrenoTodos();

        //por: general, puntuacion o popularidad
        switch ($tipo_lista) {
            case 'general': $response = $this->render('JuegoBundle:Default:lista-juegos-general.html.twig', array(
                    'juegos' => $juegos,
                ));
                break;
            case 'puntuacion':
                usort($juegos, function($a, $b) {
                    return $b['puntuacion'] - $a['puntuacion'];
                });
                $response = $this->render('JuegoBundle:Default:lista-juegos-puntuacion.html.twig', array(
                    'juegos' => $juegos
                ));
                break;
        }//fin switch

        return $response;
    }

    //juego informacion general
    public function fichaAction($juego = 'mario') {



        $repository = $this->getDoctrine()->getManager()->getRepository('JuegoBundle:Juego');

        $juego = $repository->findJuego($juego);

        if (!$juego) {
            throw $this->createNotFoundException('No hubo ningun juego');
        }

        //VOY POR AQUI: esto es para guardar en la sesion los juegos ya vistos pero solo si el usuario esta registrado
        if ( $this->get('security.context')->isGranted('ROLE_USUARIO')) {

            $session = $this->get('session');
           
            
            $recientes = $session->get('recientes' , array()); //obtener los juegos recientes si existen            

            if (!in_array($juego->getId(), $recientes)) { //si este juego no estaba en el array de vistos...
                array_push($recientes, $juego->getId()); //...entonces guardarlo
                $session->set('recientes', $recientes);
            }
        }

        $response = $this->render('JuegoBundle:Default:ficha.html.twig', array(
            'juego' => $juego
        ));
        return $response;
    }

    //esto es solo cuando la busqueda de un juego viene del form de busqueda
    public function fichapostAction(\Symfony\Component\HttpFoundation\Request $request) {


        $repository = $this->getDoctrine()->getManager()->getRepository('JuegoBundle:Juego');

        $juego = $repository->findJuego($request->request->get('juego'));

        if (!$juego) {
            throw $this->createNotFoundException('No hubo ningun juego');
        }
        $response = $this->render('JuegoBundle:Default:ficha.html.twig', array(
            'juego' => $juego
        ));
        return $response;
    }

    //juego informacion completa con criticas
    public function reviewAction($juego) {

        $manager = $this->getDoctrine()->getManager();
        $repositorioJuego = $manager->getRepository('JuegoBundle:Juego');
        $repositorioValoracion = $manager->getRepository('ValoracionBundle:Valoracion');

        $juego = $repositorioJuego->findJuego($juego);        
        $valoraciones = $repositorioValoracion->findValoracionesPorJuego($juego);

        if (!$juego) {
            throw $this->createNotFoundException('No hubo juego');
        }

        $response = $this->render('JuegoBundle:Default:review.html.twig.twig', array(
            'juego' => $juego,
            'valoraciones' => $valoraciones
        ));

        return $response;
    }

    //traer juego por ajax
    public function ajaxSearchAction(\Symfony\Component\HttpFoundation\Request $request) {

        if ($request->isXmlHttpRequest()) {
            $input = $request->request->get('input');
            $manager = $this->getDoctrine()->getManager();
            $juegos = $manager->getRepository('JuegoBundle:Juego')->findAjax($input);


            //return new \Symfony\Component\HttpFoundation\Response("<p>contenido devuelto " . $input . "</p>");
            //la vista con los resultados de los juegos
            $response = $this->render('JuegoBundle:Default:resultado-ajax.html.twig', array(
                'juegos' => $juegos
            ));

            return $response;
        }
    }

}
