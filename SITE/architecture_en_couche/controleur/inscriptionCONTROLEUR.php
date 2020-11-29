<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/inscriptionPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");


session_start();


$utilisateurservice = new UtilisateurService();

    if (isset($_GET["action"]) && $_GET["action"]=="inscription" && !empty($_POST)) {
        if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
        && isset($_POST["mail"]) && !empty($_POST["mail"])
        && isset($_POST["password"]) && !empty($_POST["password"])
        && isset($_POST["confirmpassword"]) && !empty($_POST["confirmpassword"])
        && isset($_POST["checkcgu"])) {
            $mail=$_POST["mail"];
            $password=$_POST["password"];
            $data=$utilisateurservice->chercherUtilisateurParMail($mail);
                if (!empty($data) && ($_POST["mail"]) == ($data["mail"])){
                    displayMailUsed();
                } else {
                    $newPassword=$utilisateurservice->passwordHash($password);
                    $utilisateurservice->ajoutUtilisateur($mail,$newPassword);
                    header('Location: connexionCONTROLEUR.php');
                } 
        } else if (empty($_POST["pseudo"])) {
            displayEmptyPseudo();
        } else if (empty($_POST["mail"])) {
            displayEmptyMail();
        } else if (empty($_POST["password"])) {
            displayEmptyPassword();
        } else if (empty($_POST["confirmpassword"])) {
            displayEmptyConfirmPassword();  
        } else if (($_POST["password"]) != ($_POST["confirmpassword"])) {
            displayDifferentPasswords();
        } else if (empty($_POST["checkcgu"])) {
            displayEmptyCgu();
        } else {
            displayEmptyForm();
        }
    }

displayPageInscription();

?>