<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\CategoriaBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\CategoriaBundle\Entity\Categoria;

class Categorias extends AbstractFixture implements OrderedFixtureInterface
{
    public function getOrder(){
        return 1;
    }

    
    //put your code here
    public function load(ObjectManager $om) {
        $cat1 = new Categoria();
        $cat2 = new Categoria();
        $cat3 = new Categoria();
        $cat4 = new Categoria();
        $cat5 = new Categoria();

        $cat1->setNombre('Acción')->setSlug('accion');
        $cat2->setNombre('Plataformas')->setSlug('plataformas');
        $cat3->setNombre('RPG')->setSlug('RPG');
        $cat4->setNombre('Survival Horror')->setSlug('survival_horror');
        $cat5->setNombre('Conducción')->setSlug('conduccion');

        $om->persist($cat1);
        $om->persist($cat2);
        $om->persist($cat3);
        $om->persist($cat4);
        $om->persist($cat5);
        
        $om->flush();
    }

}
