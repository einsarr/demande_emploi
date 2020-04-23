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
use src\model\CategorieRepository;
use src\model\EmployeurRepository;

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
        $data['categories'] = $categorie->listeCategories();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("categories/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add(){
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $tab = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("categories/add",$data),
            $this->view->load("layout_front/footer"),
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
        $categorieObject->setlibelle(addslashes($libelle));
        $categorieObject->setFavori(addslashes($favori));
        $categorieObject->setEntreprise($categorie->getEntreprise($entreprise_id));
        $categorieObject->setCategories($categorie->getCategorie($categorie_id));
        $categorie->addCategorie($categorieObject);
        return $this->add();
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