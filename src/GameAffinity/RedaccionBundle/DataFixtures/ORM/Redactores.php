<?php

namespace GameAffinity\RedaccionBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\RedaccionBundle\Entity\Redaccion;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;



class Redactores extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface {
    //put your code here
    private $container;
    
    public function setContainer(ContainerInterface $container = null){
        $this->container = $container;
    }

        public function getOrder() {
        return 5;
    }
    
    public function load(ObjectManager $om){
        $redactor = new Redaccion();
        $redactor
                ->setEmail('ramiro@ramiro.com')
                ->setFoto('foto_fixtures')
                ->setNombre('ramirosky')                
                ->setUsername('ramirosky')
                ->setRole('ROLE_REDACCION')
                ;
        $salt = md5(time());
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($redactor);
        $password = $encoder->encodePassword('ramirosky' , $salt);
        $redactor->setPassword($password)->setSalt($salt);
                
        $om->persist($redactor);
        $om->flush();
        
    }
    
}
