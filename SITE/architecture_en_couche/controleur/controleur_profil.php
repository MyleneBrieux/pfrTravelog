<?php
session_start();
require_once('../presentation/fonctionsProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 



//AFFICHAGE PAGE PROFIL
    $pseudo=$_SESSION["pseudo"];
    $newUtilisateur=new UtilisateurService();
    $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($pseudo);


//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteProfil();

    if (isset($utilisateur['photoprofil']) ){
        paramPhotoMenuLatDefaut();
    }
    else {
        paramPhotoMenuLatProfil($utilisateur);
    }


//AFFICHAGE DE LA PAGE
    affichageProfil($utilisateur);


/*REDIRECTION*/
    // if(!isset($_SESSION['pseudo'])){
    //     header("location: ../../libs/templates/accueil.php");
    // }


//SWITCH LANGUE
    // $code_langue = $_POST['code_langue'];
        
    // if ($langue == "Anglais"){
    //     $code_langue==1;
    // }
    // elseif ($langue == "Francais"){
    //     $code_langue==2;
    // }
    // elseif ($langue == "Chinois"){
    //     $code_langue==3;
    // }
    // elseif ($langue == "Arabe"){
    //     $code_langue==4;
    // }
    // elseif ($langue == "Espagnol"){
    //     $code_langue==5;
    // }
    // elseif ($langue == "Hindi"){
    //     $code_langue==6;
    // }
    // elseif ($langue == "Portuguais"){
    //     $code_langue==7;
    // }
    // else{
    //     $code_langue==20;
    // }
    // echo $code_langue;

/*MODIFICATION*/
    if(isset($_GET["action"]) && $_GET["action"] == "modifier" && !empty($_POST)){

        if (isset($_SESSION["pseudo"]) ){
            
            $password=$_POST['password'];
            $newPassword=$newUtilisateur->passwordHash($password);
            $user= new Utilisateurs(
            htmlentities($_SESSION['id']),
            htmlentities($utilisateur['pseudo']),
            htmlentities($_POST["mail"]?$_POST["mail"]:$utilisateur['mail']),
            htmlentities($newPassword?$newPassword:$utilisateur['password']),
            htmlentities($utilisateur['description']?$_POST["description"]:$utilisateur['description']),
            htmlentities($utilisateur['photoprofil']?$_POST["photoprofil"]:$utilisateur['photoprofil']),
            htmlentities($_POST["birthday"]?$_POST["birthday"]:$utilisateur['birthday']),
            htmlentities($_POST["nation"]?$_POST["nation"]:$utilisateur['nation']),
            htmlentities($utilisateur['contact']),
            htmlentities($utilisateur["notifmail"]),
            htmlentities($_POST['langue']) 
            );

            $newUtilisateur = new UtilisateurService;
            $newUtilisateur->modifierUtilisateur($user);
            
        }  
    }


  
/*DELETE DES UTILISATEURS*/    
    if(isset($_POST["action"]) && $_POST["action"] == "effacer"){
                
        if ( isset($_GET["pseudo"]) && !Empty($_GET["pseudo"]) ){
            $pseudo=htmlentities($_GET["pseudo"]); 
            $delUtilisateur=new UtilisateurService();

            try{
                $delEmploye->deleteEmployes($pseudo);
            }
            catch(ServiceException $se){
                presentationAfficherdelete($se->getCode());
            }
        }
    }
    



?>
