<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="cv")
 **/
class Cv 
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="string") **/
    private $entete;
    /** @Column(type="string") **/
    private $contenu;
    
    /**
     * One CV has One User.
     * @OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $cv;
    
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

    public function getEntete()
    {
        return $this->entete;
    }
    public function setEntete($entete)
    {
        $this->entete = $entete;
    }

    public function getCv()
    {
        return $this->cv;
    }
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    public function getContenu()
    {
        return $this->contenu;
    }
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
    }
    
    
}

?>