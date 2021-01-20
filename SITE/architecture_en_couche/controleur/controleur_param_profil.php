<?php
session_start();
require_once('../presentation/fonctionParamProfil.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 
require_once('../metier/Utilisateur.php'); 

//REDIRECTION SI PAS DE SESSION 
    if(!isset($_SESSION['pseudo']) ){
        header("Location: connexionCONTROLEUR.php");
    }


//AFFICHAGE PAGE PARAMETRES PROFIL
    try{
        $pseudo=$_SESSION["pseudo"];
        $newUtilisateur=new UtilisateurService();
        $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($pseudo);
    }catch(ServiceException $se){
        erreurModifProfil($se->getCode());
    }


/*MODIFICATION DU PROFIL*/
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
                        htmlentities($utilisateur['photoprofil']),
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
    

// MODIFICATiON DE L'IMAGE PROFIL
        if(isset($_POST["submit"])){ 

            if(!empty($_FILES["image"]["name"])) { 
                $fileName = basename($_FILES["image"]["name"]); 
                $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
                $allowTypes = array('jpg','png','jpeg','gif'); 

                if(in_array($fileType, $allowTypes)){ 
                    $image = $_FILES['image']['tmp_name']; 
                    $imgContent = addslashes(file_get_contents($image));
                    $newUtilisateur->modifPhoto($imgContent, $pseudo);
                }
            }
        } 


//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteParamProfil();
    
    if (isset($utilisateur['photoprofil']) ){
        paramPhotoMenuLatDefaut($utilisateur);
    }else {
        paramPhotoMenuLatProfil($utilisateur);
    }


/*CALCUL D'AGE UTILISATEUR*/  
    $birthday = new DateTime($utilisateur['birthday']);
    $dateJour = new DateTime();
    $age = date_diff($birthday, $dateJour);

    if(($utilisateur['birthday']) != 0 ){
        $age=$age->format('%y ans'); 
    }else{
        $age="Age Inconnu";
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


//AFFICHAGE DE LA PAGE
    affichageParamProfil($utilisateur, $age);


?>