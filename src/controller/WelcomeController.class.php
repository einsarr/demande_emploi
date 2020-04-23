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
class WelcomeController extends Controller{

    public function __construct(){
        parent::__construct();
    }
    /** 
     * use: localhost/projectName/Welcome/
     */
    public function index(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("admin/connexion"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    }
    
    public function presentation(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("layout_front/presentation"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    
    
    public function dashboard(){  
       $data = array(
           $this->view->load("layout/header"),
           $this->view->load("layout/topbar"),
           $this->view->load("layout/sidebar"),
           $this->view->load("admin/dashboard"),
           $this->view->load("layout/footer"),
       ) ;
        return $data;   
    } 
    
}
?>