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
use src\model\CategorieRepository;
use src\model\EmployeurRepository;
use src\model\CompteRepository;

class CategorieController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/
     */

    public function index(){
        $categorie = new CategorieRepository();
        $data['categories'] = $categorie->listeCategorie();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("categories/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function developpeur(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/developpeurs"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    public function bureautique(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/bureautiques"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    public function restauration(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/restaurations"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    public function assistant(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/assistants"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    }
    public function SIG(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/sigs"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    public function robotique(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/robotiques"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    public function statistique(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/statistiques"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 







    public function add(){
        $employeur = new EmployeurRepository();
        $data['employeurs'] = $employeur->listeEmployeur();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("categories/add",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/add
     */
    public function save(){
        $categorie = new CategorieRepository();
        
        extract($_POST);
        $categorieObject = new Categorie();
        $categorieObject->setPrenom(addslashes($prenom));
        $categorieObject->setNom(addslashes($nom));
        $categorieObject->setCni(addslashes($cni));
        $categorieObject->setEmail(addslashes($email));
        $categorieObject->setTelephone(addslashes($telephone));
        $categorieObject->setAdresse(addslashes($adresse));
        $categorieObject->setLogin(addslashes($login));
        $categorieObject->setPassword(sha1(addslashes($password)));
        $categorieObject->setEmployeur($categorie->getEmployeur($employeur_id));

        $compte = new CompteRepository();
        $compteObject = new Compte();

        $date = new DateTime();
        $compteObject->setCreated_at($date);
        $compteObject->setNumero(addslashes('EEE444'));
        $compteObject->setSolde(addslashes($solde));
        $compteObject->setEtat(addslashes('actif'));
        $compte->addCompte($compteObject);

        $categorie->addCategorie($categorieObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/edit/value
     */
    public function edit($id){
        
        $categorie = new CategorieRepository();
        $employeur = new EmployeurRepository();
        $data['categorie'] = $categorie->getCategorie($id);
        $data['employeurs'] = $employeur->listeEmployeur();

        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("categories/edit",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/update
     */
    public function update(){
        $categorie = new CategorieRepository();
        extract($_POST);
        $categorieObject = new Categorie();
        $categorieObject->setId($id);
        $categorieObject->setPrenom(addslashes($prenom));
        $categorieObject->setNom(addslashes($nom));
        $categorieObject->setCni(addslashes($cni));
        $categorieObject->setEmail(addslashes($email));
        $categorieObject->setTelephone(addslashes($telephone));
        $categorieObject->setAdresse(addslashes($adresse));
        $categorieObject->setLogin(addslashes($login));
        $categorieObject->setPassword(addslashes($password));
        $categorieObject->setEmployeur($categorie->getEmployeur($employeur_id));
        $categorie->updateCategorie($categorieObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/getId/value
     */

    
    
    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("categories/get_id", $data);
    }
    public function get($id){
        
        $data['categorie'] = $tdb->getCategorie($id);
        
        return $this->view->load("categories/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/Categorie/liste
     */
    public function liste(){
        $tdb = new CategorieRepository();
        
        $data['categories'] = $tdb->listeCategorie();
        return $this->view->load("categories/liste", $data);
    }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/Categorie/delete/value
     */
    public function delete($id){
        
        $tdb = new CategorieRepository();
        $tdb->deleteCategorie($id);
        return $this->index();
    }
    
}
?>