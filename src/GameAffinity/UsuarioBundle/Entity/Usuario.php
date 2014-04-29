<?php

namespace GameAffinity\UsuarioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;


/**
 * Usuario
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GameAffinity\UsuarioBundle\Entity\UsuarioRepository")
 */
class Usuario implements AdvancedUserInterface {

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
     * @Assert\Length(min="4", max="50")
     * @ORM\Column(name="nombre", type="string", length=255)     
     */
    
    /**
     *
     * @var type 
     * @ORM\Column(type="string", length=255)
     */
   private $cid;
   
   /**
    *
    * @var type 
    * @ORM\Column(type="integer")
    */
   private $codigo_confirmacion;
    
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     *
     */
    private $username;

    /**
     * 
     * 
     * @ORM\Column(type="string")
     * @Assert\Email(message="El email {{value}} no es válido", checkMX=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     *  
     */
    private $password;

    /**
     *
     * @var type 
     * @ORM\Column(type="datetime")
     */
    private $fechaAlta;

    /**
     *
     * @var type 
     * @ORM\Column(type="datetime")   
     */
    private $fechaBaja;

    /**
     *
     * @Assert\Image():
     */
    private $uploaded_foto; //no es de la entidad, es con propsitos de subir archivo

    /**
     * 
     * 
     * 
     * @ORM\Column(name="foto", type="string", length=255)     
     */
    private $foto;

    /**
     * 
     * @ORM\Column(type="datetime")
     */
    private $ultimo_acceso;

    /**
     * @var string
     *
     * @ORM\Column(name="role", type="string", length=255)
     */
    private $role;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255)
     */
    private $salt;

    /**
     * Get id
     *
     * @return integer 
     */

    /**
     *
     * @ORM\Column(type="boolean")
     */
    private $activo;    
    
    
    public function __construct() {
        $this->setCodigoConfirmacion(rand(1000, 9999));
    }
  

    public function getId() {
        return $this->id;
    }
    
    private function setCid($id){
        $this->cid=$id;
        
    }
    
    public function getCid(){
        return $this->cid;
    }
    
    public function getCodigoConfirmacion(){
        return $this->codigo_confirmacion;
    }


    public function setCodigoConfirmacion($c=null){
        $this->codigo_confirmacion=$c;
        return $this;
    }

    


    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * @return Usuario
     */
    public function setUsername($username) {
        $this->username = $username; 
        $this->setCid(sha1($username.md5(time())));//le agregue una salt 
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

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
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

    public function getFechaAlta() {
        return $this->fechaAlta;
    }

    public function setFechaAlta(\DateTime $fecha) {
        $this->fechaAlta = $fecha;
        return $this;
    }

    public function getFechaBaja(){
        return $this->fechaBaja;
    }
    
    public function setFechaBaja(\DateTime $fecha=null){
        $this->fechaBaja=$fecha;
        return $this;
    }

    public function subirFoto($ruta) {
        if (null === $this->getUploadedFoto()) {
            return null;
        }

        $nombreArchivo = uniqid('gameaffinity-') . 'foto-usuario.jpg';
        $this->getUploadedFoto()->move($ruta, $nombreArchivo);
        $this->setFoto($nombreArchivo);
        $this->uploaded_foto = null;
    }

    public function setUploadedFoto(\Symfony\Component\HttpFoundation\File\UploadedFile $file = null) {
        $this->uploaded_foto = $file;
    }

    public function getUploadedFoto() {
        return $this->uploaded_foto;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return Usuario
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

    public function getUltimoAcceso() {
        return $this->ultimo_acceso;
    }

    public function setUltimoAcceso(\DateTime $ultimo_acceso) {
        $this->ultimo_acceso = $ultimo_acceso;
        return $this;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Usuario
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return Usuario
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

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array($this->role);
    }

    public function getActivo() {
        return $this->activo;
    }

    public function setActivo($activo) {
        $this->activo = $activo;
        return $this;
    }

    public function isAccountNonExpired() {
        return true;
    }

    public function isAccountNonLocked() {
        return true;
    }

    public function isCredentialsNonExpired() {
        return true;
    }

    public function isEnabled() {
        return $this->getActivo();
    }

    /* public function serialize() {
      return serialize(array(

      $this->id,
      $this->username,
      $this->password,
      $this->role,
      $this->salt,
      $this->activo,
      ));
      }

      public function unserialize($serialized) {

      } */
}
