<?php
session_start();
require_once('../presentation/fonctionParamProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 



//AFFICHAGE PAGE PARAMETRES PROFIL
    $pseudo=$_SESSION["pseudo"];
    $utilisateur=new UtilisateurService();
    $utilisateur=$utilisateur->chercherUtilisateurParPseudo($pseudo);


//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteParamProfil();

    if (isset($utilisateur['photoprofil'])){
        paramPhotoMenuLatDefaut();
    }
    else {
        paramPhotoMenuLatProfil($utilisateur);
    }


//AFFICHAGE DE LA PAGE
    affichageParamProfil($utilisateur);


/*REDIRECTION*/
    // if(!isset($_SESSION['pseudo'])){
    //     header("location: ../../libs/templates/accueil.php");
    // }

    
//SWITCH LANGUE
    // $code_langue = $_POST['code_langue'];
        
    // if ($code_langue == "Anglais"){
    //     $code_langue=1;
    // }
    // elseif ($code_langue == "Francais"){
    //     $code_langue=2;
    // }
    // elseif ($code_langue == "Chinois"){
    //     $code_langue=3;
    // }
    // elseif ($code_langue == "Arabe"){
    //     $code_langue=4;
    // }
    // elseif ($code_langue == "Espagnol"){
    //     $code_langue=5;
    // }
    // elseif ($code_langue == "Hindi"){
    //     $code_langue==6;
    // }
    // elseif ($code_langue == "Portuguais"){
    //     $code_langue==7;
    // }
    // else{
    //     $code_langue==20;
    // }
    // echo $code_langue;

/*MODIFICATION*/
    if(isset($_GET["action"]) && $_GET["action"] == "modifier" && !empty($_POST)){

        if (isset($_SESSION["pseudo"]) ){
            
            $utilisateur= new Utilisateurs(
            htmlentities($_SESSION['id']),
            htmlentities($utilisateur['pseudo']),
            htmlentities($_POST["mail"]),
            htmlentities($_POST["password"]),
            htmlentities($utilisateur['description']),
            htmlentities($utilisateur['photoprofil']),
            htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
            htmlentities($_POST["nation"]?$_POST["nation"]:null),
            htmlentities($utilisateur['contact']),
            htmlentities($utilisateur["notifmail"]),
            (int)htmlentities($_POST["code_langue"]) 
            );

            $newUtilisateur = new UtilisateurService;
            $modifUtilisateur->modifierUtilisateur($utilisateur);
        }  
    }



/*DELETE DES UTILISATEURS*/    
    if(isset($_POST["action"]) && $_POST["action"] == "effacer"){
            
        if ( isset($_GET["pseudo"]) && !Empty($_GET["pseudo"]) ){
            $pseudo=htmlentities($_GET["pseudo"]); 
            $delUtilisateur=new UtilisateurService;

            try{
                $delEmploye->deleteEmployes($pseudo);
            }
            catch(ServiceException $se){
                presentationAfficherdelete($se->getCode());
            }
        }
    }
    



//CALUL DE L'AGE UTILISATEUR
    // $age=new UtilisateurService();
    // $age->calculAge($pseudo);
    // echo($age);





?>