<?php

namespace GameAffinity\JuegoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GameAffinity\JuegoBundle\Entity\Juego;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Foto
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Foto {

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
     * @Assert\Image()
     */
    private $virtualFoto;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;

    /**
     *
     * @ORM\ManyToOne(targetEntity="GameAffinity\JuegoBundle\Entity\Juego", inversedBy="fotos", cascade={"persist", "remove"})
     */
    private $juego;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     * @return Foto
     */
    public function setRuta($ruta) {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta() {
        return $this->ruta;
    }

    /**
     * Set juego
     *
     * @param string $juego
     * @return Foto
     */
    public function setJuego(Juego $juego) {
        $this->juego = $juego;

        return $this;
    }

    /**
     * Get juego
     *
     * @return string 
     */
    public function getJuego() {
        return $this->juego;
    }

    public function getVirtualFoto() {
        return $this->virtualFoto;
    }

    public function setVirtualFoto(UploadedFile $foto = null) {
        $this->virtualFoto = $foto;
        return $this;
    }
    
   

    //subir foto usando el metodo move de UploadedFile
    public function subirFoto($rutaDestino) {
        if (null === $this->getVirtualFoto()) {
            return;
        }

        if (!preg_match('/(jpe?g|gif|png)/', $this->virtualFoto->guessExtension())) {
            return;
        }
        $nombreArchivo = uniqid('gameaffinity-') . 'fotoJuego.' . $this->virtualFoto->guessExtension();
    $this->virtualFoto->move($rutaDestino, $nombreArchivo);
        $this->ruta = $nombreArchivo;
        $this->virtualFoto = null;
    }

}
