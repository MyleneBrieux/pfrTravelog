<?php
session_start();
include_once("../model-metier/Utilisateur.php"); 
include_once('../service/utilisateurService.php');
include_once('../presentation/fonctionsProfil.php');





/*REDIRECTION*/
    if(!isset($_SESSION['email'])){
        header("location: ../../libs/templates/accueil.php");
    }


/*MODIFICATION*/
    if(isset($_POST["action"]) && $_GET["action"] == "modifier"){

        if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])){
            $utilisateur= new Utilisateur(
                htmlentities($_POST["pseudo"]),
                htmlentities($_POST["email"]),
                htmlentities($_POST["password"]),
                htmlentities($_POST["birthday"]?$_POST["birthday"]:null),
                htmlentities($_POST["nation"]?$_POST["nation"]:null),
                htmlentities($_POST["description"]?$_POST["description"]:null),
                htmlentities($_POST["photoprofil"]?$_POST["birthday"]:null),
                htmlentities($_POST["contact"]),
                htmlentities($_POST["notifmail"]),
            );
            $newUtilisateur = new UtilisateurService;

            try{
                $modifUtilisateur->updateProfil($utilisateur);
            }
            catch(ServiceException $se){
                presentationAfficherModif($se->getCode());
            }
        }
    }
























?>