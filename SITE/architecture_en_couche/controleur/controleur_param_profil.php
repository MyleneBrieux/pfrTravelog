<?php
session_start();
require_once('../presentation/fonctionParamProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 
require_once('../metier/Utilisateur.php'); 


//AFFICHAGE PAGE PARAMETRES PROFIL
    $pseudo=$_SESSION["pseudo"];
    $newUtilisateur=new UtilisateurService();
    $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($pseudo);


/*MODIFICATION*/
    if(isset($_GET["action"]) && $_GET["action"] == "modifier"){ 
        $password=$_POST['password'];

            if(($_POST['password']) == ($_POST['confirmPassword'] )){
        
                if(($_POST['mail']) == ($_POST['confirmMail']) ){

                    if(!isset($_POST['contact']) ){
                        $_POST['contact']="N";
                    }

                    if(!isset($_POST['notifmail']) ){
                        $_POST['notifmail']="N";
                    }

                    $newPassword=$newUtilisateur->passwordHash($_POST["password"], PASSWORD_DEFAULT);
                    $user= new Utilisateurs(
                    htmlentities($utilisateur['id']),
                    htmlentities($utilisateur['pseudo']),
                    htmlentities($_POST["mail"]?$_POST["mail"]:$utilisateur['mail']),
                    htmlentities($newPassword?$newPassword:$utilisateur['password']),
                    htmlentities($_POST['description']?$_POST["description"]:$utilisateur['description']),
                    htmlentities($_POST['photoprofil']?$_POST["photoprofil"]:$utilisateur['photoprofil']),
                    htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
                    htmlentities($_POST["nation"]?$_POST["nation"]:$utilisateur['nation']),
                    htmlentities($_POST['contact']),
                    htmlentities($_POST['notifmail']),
                    htmlentities($_POST['langue']?$_POST['langue']:$utilisateur['langue']) 
                    );
                    try{
                        $newUtilisateur->modifierUtilisateur($user);
                        header("Location: controleur_profil.php");   
                    }catch(ServiceException $se){
                        erreurModifProfil($se->getCode());
                    }   
                }else{
                    mdpInvalide();  
                }  
            }else{
                mdpDifferents();
            }
    }
    


//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteParamProfil();

    if (isset($utilisateur['photoprofil']) ){
        paramPhotoMenuLatDefaut();
    }else {
        paramPhotoMenuLatProfil($utilisateur);
    }


/*DELETE DES UTILISATEURS*/    
    // if(isset($_POST["action"]) && $_POST["action"] == "effacer"){
                        
    //     if ( isset($_GET["pseudo"]) && !Empty($_GET["pseudo"]) ){
    //         $pseudo=htmlentities($_GET["pseudo"]); 
    //         $delUtilisateur=new UtilisateurService();

    //         try{
    //             $delEmploye->deleteEmployes($pseudo);
    //         }
    //         catch(ServiceException $se){
    //             presentationAfficherdelete($se->getCode());
    //         }
    //     }
    // }


/*CALCUL D'AGE UTILISATEUR*/  
    $birthday = new DateTime($utilisateur['birthday']);
    $dateJour = new DateTime();
    $age = date_diff($birthday, $dateJour);

    if(($utilisateur['birthday']) != 0 ){
        $age=$age->format('%y ans'); 
    }else{
        $age="Age Inconnu";
    }
    

//AFFICHAGE DE LA PAGE
    affichageParamProfil($utilisateur, $age);


?>