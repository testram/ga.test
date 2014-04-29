<?php

namespace GameAffinity\DesarrolladorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GameAffinity\JuegoBundle\Util\Util;

/**
 * Desarrollador
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GameAffinity\DesarrolladorBundle\Entity\DesarrolladorRepository")
 */
class Desarrollador
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="slug", type="string", length=255)
     */
    private $slug;

    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Desarrollador
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Desarrollador
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

   
}
