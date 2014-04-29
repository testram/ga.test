<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\SistemaBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\SistemaBundle\Entity\Sistema;

class Sistemas extends AbstractFixture implements OrderedFixtureInterface
{
    //put your code here
    public function getOrder() {        
        return 4;
    }
    
    public function load(ObjectManager $manager) {
        $sistemas=array(
            array('nombre'=>"PC",'slug'=>"pc"),
            array('nombre'=>"XBOX360",'slug'=>"xbox_360"),
            array('nombre'=>"PS3",'slug'=>"ps3")
        );
        
        foreach($sistemas as $sistema){
            
            $entidad=new Sistema();
            $entidad
                    ->setNombre($sistema['nombre'])
                    ->setSlug($sistema['slug']);
            
            $manager->persist($entidad);
            
        }//fin foreach
        $manager->flush();
    }
}
