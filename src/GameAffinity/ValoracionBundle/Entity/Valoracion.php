<?php

namespace GameAffinity\ValoracionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Valoracion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GameAffinity\ValoracionBundle\Entity\ValoracionRepository")
 */
class Valoracion {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="GameAffinity\JuegoBundle\Entity\Juego")
     */
    private $post;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    private $titulo;

    /**
     *
     * @ORM\ManyToOne(targetEntity="GameAffinity\UsuarioBundle\Entity\Usuario")
     */
    private $usuario;

    /**
     *
     * @ORM\ManyToOne(targetEntity="GameAffinity\RedaccionBundle\Entity\Redaccion")
     *  
     */
    private $redactor;

    /**
     * @var integer
     *
     * @ORM\Column(name="calificacion", type="smallint")
     */
    private $calificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="opinion", type="text")
     */
    private $opinion;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntaje", type="integer")
     */
    private $puntaje;

    /**
     * 
     * 
     * @ORM\Column(type="boolean")
     */
    private $revisado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Valoracion
     */
    public function setTitulo($titulo) {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo() {
        return $this->titulo;
    }

    public function setUsuario(\GameAffinity\UsuarioBundle\Entity\usuario $usuario) {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getUsuario() {
        return $this->usuario;
    }

    public function setRedactor(\GameAffinity\RedaccionBundle\Entity\Redaccion $redactor) {
        $this->redactor = $redactor;
        return $this;
    }

    public function getRedactor() {
        return $this->redactor;
    }

    public function getPost() {
        return $this->post;
    }

    public function setPost(\GameAffinity\JuegoBundle\Entity\Juego $post) {
        $this->post = $post;
    }

    /**
     * Set calificacion
     *
     * @param integer $calificacion
     * @return Valoracion
     */
    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;

        return $this;
    }

    /**
     * Get calificacion
     *
     * @return integer 
     */
    public function getCalificacion() {
        return $this->calificacion;
    }

    /**
     * Set opinion
     *
     * @param string $opinion
     * @return Valoracion
     */
    public function setOpinion($opinion) {
        $this->opinion = $opinion;

        return $this;
    }

    public function setRevisado($revisado) {
        $this->revisado = $revisado;
        return $this;
    }

    public function getRevisado() {
        return $this->revisado;
    }

    /**
     * Get opinion
     *
     * @return string 
     */
    public function getOpinion() {
        return $this->opinion;
    }

    /**
     * Set puntaje
     *
     * @param integer $puntaje
     * @return Valoracion
     */
    public function setPuntaje($puntaje) {
        $this->puntaje = $puntaje;

        return $this;
    }

    /**
     * Get puntaje
     *
     * @return integer 
     */
    public function getPuntaje() {
        return $this->puntaje;
    }

}
