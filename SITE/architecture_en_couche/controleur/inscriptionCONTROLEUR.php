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
        && isset($_POST["confirmpassword"]) && !empty($_POST["confirmpassword"])) {
            $pseudo=$_POST["pseudo"];
            $mail=$_POST["mail"];
            $password=$_POST["password"];
            $confirmpassword=$_POST["confirmpassword"];
            $data=$utilisateurservice->chercherUtilisateur($mail);
                if (!empty($data) && ($_POST["mail"]) == ($data["mail"])){
                    header('Location: inscriptionCONTROLEUR.php?warning=mailused');
                } else {
                    $newPassword=$utilisateurservice->passwordHash($password);
                    $utilisateurservice->ajoutUtilisateur($mail,$newPassword);
                    header('Location: connexionCONTROLEUR.php');
                }   
        } else {
            echo "La saisie des champs est obligatoire ! ";
        }
    }

displayPageInscription();

?>