<?php
session_start();
require_once('../presentation/fonctionsContact.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 



// AFFICHAGE DE L'ENTETE CONTACT
affichageEnteteContact();

    $expediteur = $_SESSION['pseudo'];
    $destinataire = "lydlus@hotmail.com";

// CONFIGURATION DE LA METHODE DE CONNEXION
    if(isset($_GET["action"]) && $_GET["action"] == "envoyer" && !empty($_POST)){
        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        
        // $sujet = "Message en provenance de Travelog";
        
        
// AFFICHAGE DE LA REPONSE D'ENVOI D'EMAIL (OK OU PAS OK)
        if (mail($destinataire, $sujet, $message, $expediteur)) {
            envoiOK();
        } 
        else {
            envoiPasOK();
        }
    }
    

// AFFICHAGE DU CORPS DE LA PAGE CONTACT
    affichageCorpsContact($expediteur);
?>













