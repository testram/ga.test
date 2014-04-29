<?php

namespace GameAffinity\CategoriaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CategoriaBundle:Default:index.html.twig', array('name' => $name));
    }
}
