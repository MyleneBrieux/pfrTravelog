<?php
session_start();
require_once('../presentation/fonctionsContact.php');


// AFFICHAGE DE LA PAGE CONTACT
    affichageContact();

// CONFIGURATION DE LA METHODE DE CONNEXION
    if(isset($_GET["action"]) && $_GET["action"] == "envoyer" && !empty($_POST)){

        $destinataire = "andhromede@gmail.com";
        $sujet = "Message en provenance de Travelog";
        $message = $_POST['message'];
        $envoyeur = $_POST['email'];

        if (mail($destinataire, $sujet, $message, $envoyeur)) {
            echo "Email envoyé avec succès à $destinataire ...";
        } 
        
        else {
            echo "Erreur lors de l'envoi de l'email";
        }
    }
    

?>













