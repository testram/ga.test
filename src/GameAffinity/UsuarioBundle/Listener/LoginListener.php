<?php

namespace GameAffinity\UsuarioBundle\Listener;

use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Routing\Router;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class LoginListener implements ContainerAwareInterface {

    //put your code here

    private $router;
    private $container;
    private $user = null;

    public function setRouter(Router $router) {
        $this->router = $router;
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

    public function onSecurityInteractiveLogin(InteractiveLoginEvent $e) {

        $token = $e->getAuthenticationToken();
        $this->user = $token->getUser();
        if (!in_array($this->user->getRole(), array('ROLE_REDACCION'))) {
            $this->user->setUltimoAcceso(new \DateTime());
            $manager = $this->container->get('doctrine')->getManager();
            $manager->persist($this->user);
            $manager->flush();
        }
    }

    
}
