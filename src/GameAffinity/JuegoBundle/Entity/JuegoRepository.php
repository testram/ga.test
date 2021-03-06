<?php

namespace GameAffinity\JuegoBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * JuegoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class JuegoRepository extends EntityRepository {

    //regresa los juegos cuya fecha de lanzamiento es hoy o anterior solo en un mes a la de hoy
    public function findJuegosEstreno($maxResults = null) {
        $manager = $this->getEntityManager();
        //     
        $hoy = new \DateTime();
        $haceunmes = new \DateTime('today - 30 days');

        $dql = "select j, d, c, s, r from JuegoBundle:Juego j "
                . "join j.desarrollador d "
                . "join j.categorias c "
                . "join j.sistemas s "
                . "join j.redaccion r "
                . "where j.activo =true and j.fecha_lanzamiento <= :hoy and j.fecha_lanzamiento >= :haceunmes";


        $consulta = $manager->createQuery($dql);
        $consulta->setParameter('hoy', $hoy);
        $consulta->setParameter('haceunmes', $haceunmes);
        $consulta->setMaxResults($maxResults);
        //$consulta->useCacheResult('true',3600);
        return $consulta->getArrayResult();
    }

    //una lista completa de los juegos de estreno
    public function findJuegosEstrenoTodos() {
        return $this->findJuegosEstreno();
    }

   

    public function findGenerosPorJuego($juego) {
        $manager = $this->getEntityManager();
        $dql = "select g, j from JuegoBundle:Juego j"
                . " where juego=:juego and juego.activo = true";

        $consulta = $manager->createQuery($dql);
        $consulta->setParameter('juego', $juego);
        return $consulta->getArrayResult();
    }

    //regresa los juegos que aun no han salido, es decir, cuya fecha es mayor que la de hoy
    public function findJuegosProximos($maxResults = null) {
        $manager = $this->getEntityManager();
        //
        $dql = "select j,d,c,s,r from JuegoBundle:Juego j"
                . "join j.desarrollador d "
                . "join j.categoria c "
                . "join j.sistema s "
                . "join j.redaccion r "
                . "where j.fecha_lanzamiento >= :fecha_actual";
        $consulta = $manager->createQuery($dql);
        $consulta->setParameter(':fecha_actual', new \DateTime());
        $consulta->setMaxResults($maxResults);
        $consulta->useCacheResult('true', 3600 * 4);
        return $consulta->getArrayResult();
    }

    //una lista completa de los juegos que estan por salir
    public function findJuegosProximosTodos() {
        $this->findJuegosProximos();
    }

    //juegos antiguos, es decir, cuya fecha de lanzamiento sea de 6 o mas meses de difrencia con la fecha acctual
    public function findJuegosAntiguos($maxResult = null) {
        $manager = $this->getEntityManager();
        $dql = "select j,d,c,s,r from JuegoBundle:Juego j"
                . "join j.desarrollador d "
                . "join j.categoria c "
                . "join j.sistema s "
                . "join j.redaccion r "
                . "where j.fecha_lanzamiento < :fecha_caduca";
        $consulta = $manager->createQuery($dql);
        $consulta->setParameter('fecha_caduca', new DateTime('today - 30 days'));
        $consulta->setMaxResults($maxResult);
        $consulta->useResultCache('true', 3600 * 24);
        return $consulta->getArrayResult();
    }

    //una lista de todos los juegos antiguos (el criterio de arriba)
    public function findJuegosAntiguosTodos() {
        $this->findJuegosAntiguos();
    }

    //ir a la review de un juego
    public function findJuego($slug) {
        $manager = $this->getEntityManager();
        
        $dql = 'select j, d, c, s, r from JuegoBundle:Juego j '
                . "join j.desarrollador d "
                . "join j.categorias c "
                . "join j.sistemas s "
                . "join j.redaccion r "
                . 'where j.slug = :slug and j.activo = true';
        $consulta = $manager->createQuery($dql);        
        $consulta->setParameter('slug', $slug);
        //$consulta->setMaxResults(1);        
        return $consulta->getSingleResult();
    }
    
    //juego por id
     //
    public function findJuegoPorId($id) {
        
        $manager = $this->getEntityManager();
         $dql = 'select j from JuegoBundle:Juego j '
        //$dql = 'select j, d, c, s, r from JuegoBundle:Juego j '
                //. "join j.desarrollador d "
                //. "join j.categorias c "
                //. "join j.sistemas s "
                //. "join j.redaccion r "
                . 'where j.id = :id';
        $consulta = $manager->createQuery($dql);        
        $consulta->setParameter('id', $id);
        $consulta->setMaxResults(1);        
        return $consulta->getSingleResult();
    }
    
    public function findJuegosByRedactor($redactor){
        $manager = $this->getEntityManager();
        $dql = 'select j, d, c, s, r '
                .'from JuegoBundle:Juego j '
                .'join j.desarrollador d '
                .'join j.categorias c '
                .'join j.sistemas s '
                .'join j.redaccion r '
                .'where r = :redactor and j.activo = true'
                ;
        $consulta = $manager->createQuery($dql);
        $consulta->setParameter('redactor', $redactor->getId());
        return $consulta->getArrayResult();
    }
    
    
    //trae todos los juegos por medio de una busqueda ajax
    public function findAjax($input){
        
        
        //quitar espacios en blanco entre palabras
        $input = preg_replace('/\s\s+/', ' ', $input);
        
        
        $manager= $this->getEntityManager();
        $dql= "select j from JuegoBundle:Juego j "
                . "where j.nombre like :input and juego.activo = true";
        $consulta= $manager->createQuery($dql);
        $consulta->setParameter('input',trim($input).'%');
        return $consulta->getArrayResult();            
               
    }
    
    public function desactivarJuego($slug){
        $manager = $this->getEntityManager();
        $dql = 'update JuegoBundle:Juego j set j.activo =false where juego.slug=:slug';
        $consulta = $manager->createQuery($dql);
        $consulta->setParameter('slug', $slug);
            
    }

}
