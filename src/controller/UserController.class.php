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

class UserController extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function seConnecter(){  
        $tab = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("users/connect"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $tab;    
    } 
    public function addCompte(){  
        $offre = new UserRepository();
        $profils = new ProfilRepository();
        $data['profils'] = $profils->listeProfils();
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("users/add",$data),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    } 
    /** 
     * url pattern for this method
     * localhost/projectName/User/add
     */
    public function save(){
        $user = new UserRepository();
        extract($_POST);
        $userObject = new User();
        if(!empty($_FILES))
        {
            $avatar = $_FILES['avatar']['name'];
            $file_extension = strrchr($avatar,".");

            $file_tmp_name=$_FILES['avatar']['tmp_name'];
            $file_dest ="public/avatar/".$avatar;
            $extensions_autorisees = array('.png','.gif','.jpg','.jpeg');
            if(in_array($file_extension,$extensions_autorisees))
            {
                if(move_uploaded_file($file_tmp_name,$file_dest))
                {
                    echo "<script>alert('Enrégistrement réussie avec succès.')</script>";
                }else{
                    echo "<script>alert('Une erreur s'est produit.')</script>";
                }
            }else{
                echo "<script>alert('Seuls les fichiers images sont autorisés.')</script>";
            }
        }
        $userObject->setNom_complet(addslashes($nom_complet));
        $userObject->setEmail(addslashes($email));
        $userObject->setTelephone(addslashes($telephone));
        $userObject->setAdresse(addslashes($adresse));
        $userObject->setAvatar(addslashes($avatar));
        $userObject->setLogin(addslashes($login));
        $userObject->setPassword(sha1(addslashes($password)));
        $userObject->setProfil($user->getProfil($profil_id));
        $user->addUser($userObject);
        return $this->seConnecter();
    }
    public function entreprises(){  
        $data = array(
            $this->view->load("layout_front/header"),
            $this->view->load("layout_front/topbar"),
            $this->view->load("users/entreprises"),
            $this->view->load("layout_front/footer"),
        ) ;
         return $data;    
    }
    public function deconnection(){
        return  $this->view->load("admin/connexion");
    }
    public function login(){
        extract($_POST);
        $user = new UserRepository();
        $resultat= $user->login($login,sha1($password));
        if(!$resultat)
        {
            $data['message'] = 'Login et/ou mot de passe incorrecte';
            return $this->seConnecter();
        }
        else{
            $data['user'] = $resultat;
            $tab = array(
                $this->view->load("layout/header"),
                $this->view->load("layout/topbar"),
                //$this->view->load("layout/sidebar"),
                $this->view->load("admin/dashboard",$data),
                $this->view->load("layout/footer"),
            );
        }
        return $tab;
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