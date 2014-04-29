<?php

namespace GameAffinity\RedaccionBundle\Entity;


use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Redaccion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GameAffinity\RedaccionBundle\Entity\RedaccionRepository")
 */
class Redaccion implements UserInterface {

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
     * @Assert\Length(min="4", max="50", minMessage="Nombre muy corto", maxMessage="Nombre muy largo" )
     * @Assert\NotBlank()
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * @Assert\Length(min="1", max="15", minMessage="username muy corto", maxMessage="username muy largo")
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email(message="El email '{{value}}' no es un correo válido")
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\length(min="6",max="15", minMessage="La contraseña no debe tener menos de 6 caracteres",maxMessage="La contraseña es muy larga")
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)   
     */
    private $foto;

    /**
     *
     * @var type 
     * @Assert\Image();
     */
    private $uploadedFoto;

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
     * @return Redaccion
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;

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

    /**
     * Set username
     *
     * @param string $username
     * @return Redaccion
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Redaccion
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Redaccion
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Redaccion
     */
    public function setSalt($salt) {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string 
     */
    public function getSalt() {
        return $this->salt;
    }

    /**
     * Set rol
     *
     * @param string $rol
     * @return Redaccion
     */
    public function setRole($rol) {
        $this->role = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string 
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Redaccion
     */
    public function setFoto($foto) {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto() {
        return $this->foto;
    }

    public function getUploadedFoto() {
        return $this->uploadedFoto;
    }

    public function setUploadedFoto(\Symfony\Component\HttpFoundation\File\UploadedFile $uploadedFoto) {
        $this->uploadedFoto = $uploadedFoto;
        return $this;
    }

    public function subirFoto($rutaDestino) {
        //si no se eligio foto entonces no hacer nada
        if (null === $this->getUploadedFoto()) {
            return;
        }

        $nombreArchivo = uniqid('gameaffinity-') . 'fotoRedactor.jpg';
        $this->uploadedFoto->move($rutaDestino, $nombreArchivo);
        $this->setFoto($nombreArchivo);
        $this->uploadedFoto = null;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array($this->role);
    }

}
