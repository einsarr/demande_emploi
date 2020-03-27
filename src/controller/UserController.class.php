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
use src\model\UserRepository;
use src\model\AgenceRepository;
use src\model\ProfilRepository;
use src\model\CaisseRepository;
use src\model\ClientRepository;

class UserController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    
    public function deconnection(){
        //session_destroy();
        return  $this->view->load("admin/connexion");
    }
    public function login(){
        extract($_POST);
        $user = new UserRepository();
        $resultat= $user->login($login,sha1($password));

       
        if(!$resultat)
        {
            $data['message'] = 'Login et/ou mot de passe incorrecte';
            $tab = array(
                $this->view->load("admin/connexion",$data),
            );
        }
        
        else{
            session_start();
            $data["resultat"]=$resultat;
            //$client = new ClientRepository();
            //$data["client"] = $client->nombre_clients();
            $tab = array(
                $this->view->load("layout/header"),
                $this->view->load("layout/sidebar"),
                $this->view->load("layout/topbar"),
                $this->view->load("admin/dashboard",$data),
                $this->view->load("layout/footer"),
            );
        }
        return $tab;
    }
    
    public function add_emp_caisse($client_id){
        $agence = new AgenceRepository();
        $user = new UserRepository();
        $caisses = new CaisseRepository();
        $data['agences'] = $agence->listeAgence();
        $data['user'] = $user->getUser($client_id);
        $data['caisses'] = $caisses->listeCaisse();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("users/user_caisse",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    /** 
     * url pattern for this method
     * localhost/projectName/User/
     */

    public function index(){
        $user = new UserRepository();
        $data['users'] = $user->listeUser();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("users/liste",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
    public function add(){
        $agence = new AgenceRepository();
        $data['agences'] = $agence->listeAgence();
        $profil = new ProfilRepository();
        $data['profils'] = $profil->listeProfil();
        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("users/add",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/User/add
     */
    public function save(){
        $user = new UserRepository();
        extract($_POST);
        $userObject = new User();
        
        $userObject->setPrenom(addslashes($prenom));
        $userObject->setNom(addslashes($nom));
        $userObject->setEmail(addslashes($email));
        $userObject->setTelephone(addslashes($telephone));
        $userObject->setAdresse(addslashes($adresse));
        $userObject->setLogin(addslashes($login));
        $userObject->setPassword(sha1(addslashes($password)));
        $userObject->setAgence($user->getAgence($agence_id));
        $userObject->setProfil($user->getProfil($profil_id));
        $user->addUser($userObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/User/edit/value
     */
    public function edit($id){
        
        $user = new UserRepository();
        $agence = new AgenceRepository();
        $profil = new ProfilRepository();
        $data['user'] = $user->getUser($id);
        $data['agences'] = $agence->listeAgence();
        $data['profils'] = $profil->listeProfil();

        $tab = array(
            $this->view->load("layout/header"),
            $this->view->load("layout/sidebar"),
            $this->view->load("layout/topbar"),
            $this->view->load("users/edit",$data),
            $this->view->load("layout/footer"),
        );
        return $tab;
    }
     /** 
     * url pattern for this method
     * localhost/projectName/User/update
     */
    public function update(){
        $user = new UserRepository();
        extract($_POST);
        $userObject = new User();
        $userObject->setId($id);
        $userObject->setPrenom(addslashes($prenom));
        $userObject->setNom(addslashes($nom));
        $userObject->setEmail(addslashes($email));
        $userObject->setTelephone(addslashes($telephone));
        $userObject->setAdresse(addslashes($adresse));
        $userObject->setLogin(addslashes($login));
        $userObject->setPassword(addslashes($password));
        $userObject->setAgence($user->getAgence($agence_id));
        $userObject->setProfil($user->getProfil($profil_id));
        $user->updateUser($userObject);
        return $this->index();
    }
    /** 
     * url pattern for this method
     * localhost/projectName/User/getId/value
     */

    public function getId($id){
        $data['id'] = $id;

        return $this->view->load("users/get_id", $data);
    }
    
    public function get($id){
        
        $data['user'] = $tdb->getUser($id);
        
        return $this->view->load("users/get", $data);
    }
    /** 
     * url pattern for this method
     * localhost/projectName/User/liste
     */
    public function liste(){
        $tdb = new UserRepository();
        
        $data['users'] = $tdb->listeUser();
        return $this->view->load("users/liste", $data);
    }
    
    
     /** 
     * url pattern for this method
     * localhost/projectName/User/delete/value
     */
    public function delete($id){
        
        $tdb = new UserRepository();
        $tdb->deleteUser($id);
        return $this->index();
    }
    
}
?>