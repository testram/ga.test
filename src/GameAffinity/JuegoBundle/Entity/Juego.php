<?php

namespace GameAffinity\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection as Coleccion;

use Symfony\Component\Validator\Constraints as Assert;
use GameAffinity\DesarrolladorBundle\Entity\Desarrollador;
use GameAffinity\CategoriaBundle\Entity\Categoria;
use GameAffinity\SistemaBundle\Entity\Sistema;
use GameAffinity\RedaccionBundle\Entity\Redaccion;
use GameAffinity\JuegoBundle\Util\Util;
use Symfony\Component\HttpFoundation\File\UploadedFile;
//use GameAffinity\JuegoBundle\Entity\Foto;

/**
 * Juego
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GameAffinity\JuegoBundle\Entity\JuegoRepository")
 */
class Juego {

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
     * 
     * @ORM\Column(type="boolean")
     */
    private $activo;

    /**
     * 
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;
    
    /**
     * 
     * @Assert\Valid
     * @ORM\OneToMany(targetEntity="GameAffinity\JuegoBundle\Entity\Foto", mappedBy="juego")
     */
    private $fotosSecundarias;
    
    
    

    /**
     * 
     * @Assert\Image()
     */
    private $uploaded_foto;

    /**
     * 
     * @ORM\Column(type="datetime")
     */
    private $fecha_lanzamiento;

    /**
     * 
     * @ORM\Column(name="critica", type="text")
     */
    private $critica;

    /**
     *
     * @ORM\ManyToOne(targetEntity="GameAffinity\DesarrolladorBundle\Entity\Desarrollador")
     */
    private $desarrollador;

    /**
     *
     * @ORM\ManyToMany(targetEntity="GameAffinity\CategoriaBundle\Entity\Categoria")
     */
    private $categorias;

    /**
     *
     * @ORM\ManyToMany(targetEntity="GameAffinity\SistemaBundle\Entity\Sistema")
     */
    private $sistemas;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="GameAffinity\RedaccionBundle\Entity\Redaccion")
     */
    private $redaccion;

    /**
     * @var integer
     *
     * @ORM\Column(name="puntuacion", type="integer")
     */
    private $puntuacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="votos", type="integer")
     */
    private $votos;

    public function __construct() {
        $this->categorias = new Coleccion();
        $this->sistemas = new Coleccion();
        $this->fotos_secundarias =  Array();
       
        $this->setActivo(true);
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Juego
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
        $this->slug = Util::getSlug($nombre);

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre() {
        return $this->nombre;
    }

    public function getSlug() {
        return $this->slug;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
        return $this;
    }

    public function getActivo() {
        return $this->activo;
    }

    public function getFoto() {
        return $this->foto;
    }

    public function setFoto($foto) {
        $this->foto = $foto;
        return $this;
    }

    public function getUploadedFoto() {
        return $this->uploaded_foto;
    }

    public function setUploadedFoto(UploadedFile $uploadedFoto = null) {
        $this->uploaded_foto = $uploadedFoto;
        return $this;
    }

    public function getFechaLanzamiento() {
        return $this->fecha_lanzamiento;
    }

    public function setFechaLanzamiento(\DateTime $fecha_lanzamiento) {
        $this->fecha_lanzamiento = $fecha_lanzamiento;
        return $this;
    }

    public function getCritica() {
        return $this->critica;
    }

    public function setCritica($critica) {
        $this->critica = $critica;
        return $this;
    }

    /**
     * Set desarrollador
     *
     * @param string $desarrollador
     * @return Juego
     */
    public function setDesarrollador(Desarrollador $desarrollador) {
        $this->desarrollador = $desarrollador;

        return $this;
    }

    /**
     * Get desarrollador
     *
     * @return string 
     */
    public function getDesarrollador() {
        return $this->desarrollador;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     * @return Juego
     */
    public function setCategoria(Categoria $categoria) {
        $this->categorias->add($categoria);

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string 
     */
    public function getCategorias() {
        return $this->categorias;
    }

    /**
     * Set sistema
     *
     * @param string $sistema
     * @return Juego
     */
    public function setSistema(Sistema $sistema) {
        $this->sistemas->add($sistema);
        return $this;
    }
    
    

    /**
     * Get sistema
     *
     * @return string 
     */
    public function getSistemas() {
        return $this->sistemas;
    }

    public function getRedactor() {
        return $this->redaccion;
    }

    public function setRedaccion(Redaccion $redaccion) {
        $this->redaccion = $redaccion;
    }

    /**
     * Set valoracion
     *
     * @param integer $valoracion
     * @return Juego
     */
    public function setPuntuacion($puntuacion) {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get valoracion
     *
     * @return integer 
     */
    public function getPuntuacion() {
        return $this->puntuacion;
    }

    /**
     * Set votos
     *
     * @param integer $votos
     * @return Juego
     */
    public function setVotos($votos) {
        $this->votos = $votos;

        return $this;
    }

    /**
     * Get votos
     *
     * @return integer 
     */
    public function getVotos() {
        return $this->votos;
    }
    
    public function getFotosSecundarias(){
        
        return $this->fotosSecundarias;
    }
    
    public function setFotosSecundarias($fotos_secundarias = null){
        if(count($fotos_secundarias)==1){
            return;
        }
        $this->fotosSecundarias=$fotos_secundarias;
        
        
    }

    public function subirfoto($ruta_destino) {

        if (null === $this->uploaded_foto) {
            return;
        }
        $nombre_archivo = uniqid('gameaffinity-') . 'juego_foto.jpg';

        $this->uploaded_foto->move($ruta_destino, $nombre_archivo);
        $this->setFoto($nombre_archivo);
        $this->uploaded_foto = null;
    }

}
