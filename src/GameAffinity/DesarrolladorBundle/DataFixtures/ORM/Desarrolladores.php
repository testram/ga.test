<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\DesarrolladorBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\DesarrolladorBundle\Entity\Desarrollador;


/**
 * Description of Desarrolladores
 *
 * @author Ramiro Andres
 */
class Desarrolladores extends AbstractFixture implements OrderedFixtureInterface
{
    //put your code here
    public function getOrder() {
        return 3;
    }
    public function load(ObjectManager $manager) {
        $desarrolladores=array(
            array('nombre'=>"Nintendo", 'slug'=>"nintendo",'foto'=>"FotoDesarrollador"),
            array('nombre'=>"Sega",'slug'=>"sega",'foto'=>"FotoDesarrollador"),
            array('nombre'=>"Sony",'slug'=>"sony",'foto'=>"FotoDesarrollador"),
            array('nombre'=>"Capcom",'slug'=>"capcom",'foto'=>"FotoDesarrollador")
            );
        
        foreach($desarrolladores as $desarrollador){
            $entidad=new Desarrollador();
            $entidad
                    ->setNombre($desarrollador['nombre'])
                    ->setSlug($desarrollador['slug'])
                    ;
            $manager->persist($entidad);
            
        }//fin foreach
        
        $manager->flush();
    }
}
