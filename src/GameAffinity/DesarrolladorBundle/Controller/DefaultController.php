<?php

namespace GameAffinity\DesarrolladorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function listaJuegosPorDesarrolladorAction($desarrollador) {

        $juegos = $this->getDoctrine()->
                getManager()->
                getRepository('JuegoBundle:Juego')->
                findJuegosPorDesarrollador($desarrollador);
        $response = $this->
                render('DesarrolladorBundle:Default:lista-juegos-por-desarrollador.html.twig', array(
                    'juegos'=>$juegos
                ));
        
        return $response;
    }

}
