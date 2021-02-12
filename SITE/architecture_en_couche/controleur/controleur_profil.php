<?php
session_start();
require_once('../presentation/fonctionsProfil.php');
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


//AFFICHAGE DE LA PHOTO DU MENU SELON UTILISATEUR
    affichageEnteteProfil();
        if (isset($_SESSION['pseudo']) && isset($utilisateur['photoprofil']) ){
            paramPhotoMenuLatProfil($utilisateur);
        }else {
            paramPhotoMenuLatDefaut();
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

//AFFICHAGE DE LA PAGE
    affichageProfil($utilisateur, $age);


    
?>
