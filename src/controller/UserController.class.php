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
use src\model\ProfilRepository;
use src\service\mail\SamaneMailing;
class UserController extends Controller{
    private $url_base;
    public function __construct(){
        parent::__construct();
        session_start();
        $this->url_base="http://localhost:8080/demande_emploi/";
    }
    public function seConnecter(){  
        $this->view->load("users/connect");
    } 
    public function addCompte(){  
        $profils = new ProfilRepository();
        $data['profils'] = $profils->listeProfils();
        $this->view->load("users/add",$data);
    } 
    public function profil(){  
        $this->view->load("users/profil");
    } 
    /** 
     * url pattern for this method
     * localhost/projectName/User/add
     */
    public function save(){
        $user = new UserRepository();
        extract($_POST);
        $avatar="fff";
        $is_email_verified = 'no';
        $userObject = new User();
        $userObject->setNom_complet(addslashes($nom_complet));
        $userObject->setEmail(addslashes($email));
        $userObject->setTelephone(addslashes($telephone));
        $userObject->setAdresse(addslashes($adresse));
        $userObject->setAvatar(addslashes($avatar));
        $userObject->setLogin(addslashes($login));
        $userObject->setPassword(sha1(addslashes($password)));
        $userObject->setIs_email_verified(addslashes($is_email_verified));
        $userObject->setProfil($user->getProfil($profil_id));
        $data[]=[];
        
            $data['message_success'] = 'Un mail vous est envoyé sur '.$email.' pour une confirmation';
            $mail = new SamaneMailing();
            $passwo = sha1($password);
            $from = 'moussa.sarr1@3iweb.org';
            $companyName = 'SAMANE FRAMEWORK';
            $recipients = array("$email");
            $subject = 'Samane Information';
            $body = "<b>Salut ".$nom_complet.".<br>Samane vous remercie de votre engagement. <br>Samane PHP Framework<br></b>
            <a href='{$this->url_base}User/confirm_email/{$passwo}'>Cliquez-ici</a> pour confirmer l'inscription";
            $replyTo = null;
            $cc = null;
            $bcc = null;
            $attachments ='' ;
            $result = $mail->sendMail($from, $companyName, $recipients, $replyTo, $cc, $bcc, $attachments , $subject, $body);
            if($result)
            {
                $user->addUser($userObject);
                $data['message_success'] = 'Un mail vous est envoyé sur '.$email.' pour une confirmation';
            } else {
                $data['message_error'] = 'Message could not be sent';
            }
         $this->view->load("users/add",$data);
    }
    public function confirm_email($verification_key)
    {
        $user = new UserRepository();
        $resultat = $user->confirm_email($verification_key);
        $resultat->setIs_email_verified('yes');
        $ok = $user->updateUser($resultat);
            $data['message_success'] = "
            <h3 align='center'>
            Your email has been successfully verified, now you can login from <a href='{$this->url_base}User/login'>Se connecter</a>
            </h3>";
         
        return $this->view->load("users/add",$data);
    }
    public function entreprises(){  
        $this->view->load("users/entreprises");  
    }
    public function deconnection(){
        return  $this->view->load("admin/connexion");
    }
    public function login(){
        extract($_POST);
        $userRepo = new UserRepository();
        $utilisateur= $userRepo->login($email,sha1($password));
        
        // if(!$resultat)
        // {
        //     $data['message'] = 'Login et/ou mot de passe incorrecte';
        //     return $this->seConnecter();
        // }
        // else{
        //     $data['user'] = $resultat;
        //     $this->view->load("admin/dashboard",$data);
        // }

        $data=[];
        if($utilisateur != null){
            if($utilisateur->getIs_email_verified() =='yes')
            {
                //var_dump($utilisateur);exit;
                $_SESSION['utilisateur'] = $utilisateur;
                $data['utilisateur'] = $utilisateur;
                return $this->view->redirect("Welcome");
            }
            else
            {
                $data['message_error'] = "Veuillez confirmer votre inscription";
                 $this->view->load("users/connect",$data); 
            }
        }
        else
        {
            $data['message_error'] = "Login et/ou mot de passe incorrecte";
            $this->view->load("users/connect",$data); 
        }



    }
    
    
    /** 
     * url pattern for this method
     * localhost/projectName/User/edit/value
     */
    public function edit($id){
        
        $user = new UserRepository();
        $profil = new ProfilRepository();
        $data['user'] = $user->getUser($id);
        $data['profils'] = $profil->listeProfils();

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
        $userObject->setPrenomNom(addslashes($prenom));
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