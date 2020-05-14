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
use src\model\UserRepository;
use src\model\CategorieRepository;
class WelcomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){  
        $offres = new OffreRepository();
        $data['offres'] = $offres->listeOffres();
        //var_dump($data);exit;
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $this->view->load("admin/connexion",$data);
    }
    
    public function presentation(){
        $entreprises = new UserRepository();
        $categories = new CategorieRepository();
        $data['categories'] = $categories->listeCategories();
        $data['entreprises'] = $entreprises->listeEntreprises();  
        $this->view->load("layout_front/presentation",$data);
    } 
    
    
    public function dashboard(){  
        $this->view->load("admin/dashboard");
    } 
    
}
?>