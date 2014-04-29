<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\UsuarioBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\UsuarioBundle\Entity\Usuario;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of newPHPClass
 *
 * @author Ramiro Andres
 */
class Usuarios extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {

    private $container;

    public function setContainer(ContainerInterface $container=null) {
        $this->container = $container;
    }

    //put your code here
    public function getOrder() {
        return 2;
    }

    public function load(ObjectManager $om) {
        
        for ($i = 0; $i < 10; $i++) {
            $usuario = new Usuario();
            $usuario->setNombre("usuario" . $i);
            $usuario->setUsername("nick" . $i);
            $usuario->setEmail('email@fixtures.com');
            $usuario->setfechaAlta(new \DateTime());
            $usuario->setCodigoConfirmacion(1234);
            $usuario->setFechaBaja(new \DateTime('today + 6 days'));
            $usuario->setUltimoAcceso(new \DateTime());
                    
            
            $usuario->setActivo(true);
            $password = "contrasena" . $i;
            $salt = md5($password);
            $usuario->setRole('ROLE_USUARIO');

            $encoder = $this->container->get('security.encoder_factory')->getEncoder($usuario);
            $usuario->setPassword($encoder->encodePassword($password, $salt));
            $usuario->setSalt($salt);
            $usuario->setFoto('foto');
            $om->persist($usuario);
        }//fin for
        $om->flush();
    }

}
