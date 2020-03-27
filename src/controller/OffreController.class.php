<?php
/*==================================================
MODELE MVC DEVELOPPE PAR Ngor SECK
ngorsecka@gmail.com
(+221) 77 - 433 - 97 - 16
PERFECTIONNEZ CE MODELE ET FAITES MOI UN RETOUR
POUR TOUTE MODIFICATION VISANT A L'AMELIORER.
VOUS ETES LIBRE DE TOUTE UTILISATION.
===================================================*/ 
use libs\system\Controller; 
use src\model\OffreRepository;
use src\model\AgenceRepository;
use src\model\EmployeurRepository;
use src\model\CompteRepository;

class OffreController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/
     */

    public function index(){
        $offre = new OffreRepository();
        $data['offres'] = $offre->listeOffre();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("offres/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add(){
        $employeur = new EmployeurRepository();
        $data['employeurs'] = $employeur->listeEmployeur();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("offres/add",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Offre/add
     */
    public function save(){
        $offre = new OffreRepository();
        
        extract($_POST);
        $offreObject = new Offre();
        $offreObject->setPrenom(addslashes($prenom));
        $offreObject->setNom(addslashes($nom));
        $offreObject->setCni(addslashes($cni));
        $offreObject->setEmail(addslashes($email));
        $offreObject->setTelephone(addslashes($telephone));
        $offreObject->setAdresse(addslashes($adresse));
        $offreObject->setLogin(addslashes($login));
        $offreObject->setPassword(sha1(addslashes($password)));
        $offreObject->setEmployeur($offre->getEmployeur($employeur_id));

        $compte = new CompteRepository();
        $compteObject = new Compte();

        $date = new DateTime();
        $compteObject->setCreated_at($date);
        $compteObject->setNumero(addslashes('EEE444'));
        $compteObject->setSolde(addslashes($solde));
        $compteObject->setEtat(addslashes('actif'));
        $compte->addCompte($compteObject);

        $offre->addOffre($offreObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/edit/value
     */
    public function edit($id){
        
        $offre = new OffreRepository();
        $employeur = new EmployeurRepository();
        $data['offre'] = $offre->getOffre($id);
        $data['employeurs'] = $employeur->listeEmployeur();

        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("offres/edit",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Offre/update
     */
    public function update(){
        $offre = new OffreRepository();
        extract($_POST);
        $offreObject = new Offre();
        $offreObject->setId($id);
        $offreObject->setPrenom(addslashes($prenom));
        $offreObject->setNom(addslashes($nom));
        $offreObject->setCni(addslashes($cni));
        $offreObject->setEmail(addslashes($email));
        $offreObject->setTelephone(addslashes($telephone));
        $offreObject->setAdresse(addslashes($adresse));
        $offreObject->setLogin(addslashes($login));
        $offreObject->setPassword(addslashes($password));
        $offreObject->setEmployeur($offre->getEmployeur($employeur_id));
        $offre->updateOffre($offreObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/getId/value
     */

    
    
    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("offres/get_id", $data);
    }
    public function get($id){
        
        $data['offre'] = $tdb->getOffre($id);
        
        return $this->view->load("offres/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Offre/liste
     */
    public function liste(){
        $tdb = new OffreRepository();
        
        $data['offres'] = $tdb->listeOffre();
        return $this->view->load("offres/liste", $data);
    }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Offre/delete/value
     */
    public function delete($id){
        
        $tdb = new OffreRepository();
        $tdb->deleteOffre($id);
        return $this->index();
    }
    
}
?>