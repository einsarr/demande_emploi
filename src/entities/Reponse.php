<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="reponse")
 **/
class Reponse
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $libelle;
    /** @Column(type="string") **/
    private $description;
    /**
     * One Reponse has One Offre.
     * @OneToOne(targetEntity="Offre")
     * @JoinColumn(name="offre_id", referencedColumnName="id")
     */
    private $offre;
    /**
     * One Reponse has One User.
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
    
    public function __construct()
    {
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
    }
   
    public function getOffre()
    {
        return $this->offre;
    }
    public function setOffre($offre)
    {
        $this->offre = $offre;
    }
}

?>