<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace GameAffinity\SistemaBundle\Entity;

//use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 */
class Sistema {
    //put your code here
    /**
     *
     * @var integer $id
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /*
     * @ORM\Column(type="string",lenght=100)
     * 
     */
    private $nombre;
    
    /*
     * @ORM\Column(type="string",length=100)
     * 
     */
    private $slug;
    
    //getters y setters
    public function getId()
    {
          return $this->id;  
    
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre=$nombre;
        return $this;
        
    }
    public function getSlug()
    {
        return $this->slug;
    }
    public function setSlug($slug)
    {
        $this->slug=$slug;
    }
    public function __toString() {
        return $this->nombre;
    }
     
    
    
    
    
    
}