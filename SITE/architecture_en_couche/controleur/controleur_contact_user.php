<?php
session_start();
require_once('../presentation/fonctionsContactUser.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 


$expediteur = $_SESSION['pseudo'];
$destinataire=$_GET['pseudo'];


//REDIRECTION SI PAS DE SESSION OU DE GET['PSEUDO']
    if(!isset($_SESSION['pseudo']) || !isset($_GET['pseudo']) ){
        header("Location: accueilCONTROLEUR.php");
    }


// AFFICHAGE DE L'ENTETE CONTACT
    affichageEnteteContact();


// CONFIGURATION DE LA METHODE DE CONNEXION
    if(isset($_GET["action"]) && $_GET["action"] == "envoyer"){ 
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $newUtilisateur=new UtilisateurService();
        $utilisateur=$newUtilisateur->chercherUtilisateurParPseudo($destinataire); 
        $destinataire=$utilisateur['mail'];
        
// CONFIGURATION DE LA METHODE DE CONNEXION
        if(isset($_GET["action"]) && $_GET["action"] == "envoyer" && !empty($_POST)){

// AFFICHAGE DE LA REPONSE D'ENVOI D'EMAIL (OK OU PAS OK)
            if (mail($destinataire, $sujet, $message, $expediteur)) {
                envoiOK();
            } 
            else {
                envoiPasOK();
            }
        }
    }

// AFFICHAGE DU CORPS DE LA PAGE CONTACT
    affichageCorpsContact($destinataire);
?>













