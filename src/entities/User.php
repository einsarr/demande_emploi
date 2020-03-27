<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="user")
 **/
class User
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $nom_complet;
    /** @Column(type="string") **/
    private $avatar;
    /** @Column(type="string") **/
    private $telephone;
     /** @Column(name="email", type="string", length=255, unique=true) **/
     private $email;
    /** @Column(type="string") **/
    private $adresse;
    /** @Column(name="login", type="string", length=255, unique=true) **/
    private $login;
    /** @Column(type="string") **/
    private $password;
    /**
     * Many Users have one Profil. This is the owning side.
     * @ManyToOne(targetEntity="Profil", inversedBy="users")
     * @JoinColumn(name="profil_id", referencedColumnName="id")
     */
    private $profil;
    /**
     * One User has many Offres. This is the inverse side.
     * @OneToMany(targetEntity="Offre", mappedBy="user")
     */
    private $offres;
    /**
     * One User has many Reponses. This is the inverse side.
     * @OneToMany(targetEntity="Reponse", mappedBy="User")
     */
    private $reponses;
    
    public function __construct()
    {
        $this->offres = new ArrayCollection();
        $this->reponses = new ArrayCollection();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
    }

    public function getNom_complet()
    {
        return $this->nom_complet;
    }
    public function setNom_complet($nom_complet)
    {
        $this->nom_complet = $nom_complet;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getAdresse()
    {
        return $this->adresse;
    }
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    public function getLogin()
    {
        return $this->login;
    }
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getProfil()
    {
        return $this->profil;
    }
    public function setProfil($profil)
    {
        $this->profil = $profil;
    }
    public function getReponses()
    {
        return $this->reponses;
    }
    public function setReponses($reponses)
    {
        $this->reponses = $reponses;
    }
    public function getOffres()
    {
        return $this->offres;
    }
    public function setOffres($offres)
    {
        $this->offres = $offres;
    }
    
}

?>