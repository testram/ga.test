<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\JuegoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use GameAffinity\JuegoBundle\Entity\Juego;


/**
 * Description of Juegos
 *
 * @author Ramiro Andres
 */
class Juegos extends AbstractFixture implements OrderedFixtureInterface{
    //put your code here
    public function getOrder(){
        return 6;
    }
    public function load(ObjectManager $manager){
        $desarrolladores=$manager->getRepository("DesarrolladorBundle:Desarrollador")->findAll();
        $categorias=$manager->getRepository("CategoriaBundle:Categoria")->findAll();
        $sistemas=$manager->getRepository("SistemaBundle:Sistema")->findAll();
        $redactores=$manager->getRepository("RedaccionBundle:Redaccion")->findAll();
        
        $juegos=array(
            array(
                'nombre'=>"Mario",
                'slug'=>'mario',
                'foto'=>'fotoMario',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[0],
                'categoria'=>$categorias[1],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>10,
                'votos'=>'100'               
                
            ),
            array(
                'nombre'=>"Zelda",
                'slug'=>'zelda',
                'foto'=>'fotoZelda',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[2],
                'categoria'=>$categorias[2],
                'sistema'=>$sistemas[1],
                'redaccion'=>$redactores[0],
                'valoracion'=>9,
                'votos'=>'90'               
                
            ),
            array(
                'nombre'=>"Fox",
                'slug'=>"fox",
                'foto'=>"fotoFox",
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[3],
                'categoria'=>$categorias[0],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>8,
                'votos'=>'90'               
                
            ),
            array(
                'nombre'=>"Kirby",
                'slug'=>'kirby',
                'foto'=>'fotoKirby',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[0],
                'categoria'=>$categorias[1],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>6,
                'votos'=>'5'               
                
            ),
            array(
                'nombre'=>"Resident Evil",
                'slug'=>'resident-evil',
                'foto'=>'fotoResidentEvil',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[3],
                'categoria'=>$categorias[2],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>9,
                'votos'=>'50'               
                
            ),
            array(
                'nombre'=>"Banjo Kazooie: Nuts and Bolts",
                'slug'=>"banjo-kazooie-nuts-and-bolt",
                'foto'=>"fotoBanjoKazooie",
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una mierda",
                'desarrollador'=>$desarrolladores[0],
                'categoria'=>$categorias[0],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>2,
                'votos'=>'30'               
                
            ),
            array(
                'nombre'=>"Legacy Of Kain",
                'slug'=>'legacy-of-kain',
                'foto'=>'fotoLegacyOfKain',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
               'desarrollador'=>$desarrolladores[1],
                'categoria'=>$categorias[1],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>10,
                'votos'=>'100'               
                
            ),
            array(
                'nombre'=>"Tomb Raider",
                'slug'=>'tomb-raider',
                'foto'=>'fotoTombRaider',
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es entretenida",
                'desarrollador'=>$desarrolladores[0],
                'categoria'=>$categorias[1],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>8,
                'votos'=>'100'               
                
            ),
            array(
                'nombre'=>"Mario Kart",
                'slug'=>"mario-kart",
                'foto'=>"fotoMarioKart",
                'fecha_lanzamiento'=>new \DateTime("today"),
                'critica'=>"Es una obra maestra",
                'desarrollador'=>$desarrolladores[2],
                'categoria'=>$categorias[1],
                'sistema'=>$sistemas[2],
                'redaccion'=>$redactores[0],
                'valoracion'=>10,
                'votos'=>'100'               
                
            ),
            
            );
            
            
        
        
        foreach($juegos as $juego){
            $entidad=new Juego();
            $entidad->setNombre($juego['nombre']);
            $entidad->setCategoria($juego['categoria']);
            $entidad->setCritica($juego['critica']);
            $entidad->setDesarrollador($juego['desarrollador']);
            $entidad->setFechaLanzamiento($juego['fecha_lanzamiento']);
            $entidad->setFoto($juego['foto']);
            $entidad->setRedaccion($juego['redaccion']);
            $entidad->setSlug($juego['slug']);
            $entidad->setVotos($juego['votos']);
            $entidad->setPuntuacion($juego['valoracion']);
            $entidad->setSistema($juego['sistema']);
            
            $manager->persist($entidad);          
            
            
        }
        $manager->flush();
        
    }
    
    
}
