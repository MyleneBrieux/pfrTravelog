<?php
session_start();
require_once('../presentation/fonctionsContact.php');
require_once('../service/UtilisateurSERVICE.php');
require_once('../metier/Utilisateurs.php'); 



// AFFICHAGE DE L'ENTETE CONTACT
affichageEnteteContact();


// CONFIGURATION DE LA METHODE DE CONNEXION
    if(isset($_GET["action"]) && $_GET["action"] == "envoyer" && !empty($_POST)){

        $sujet = $_POST['sujet'];
        $message = $_POST['message'];
        $expediteur = $_SESSION['pseudo'];
        $destinataire = "lydlus@hotmail.com";
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
    affichageCorpsContact()
?>













