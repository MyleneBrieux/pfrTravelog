<?php

include_once("../presentation/connexionPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");


session_start();


$utilisateurservice = new UtilisateurService();

    if (isset($_GET["action"]) && $_GET["action"]=="connexion" && !empty($_POST)) { 
        if (isset($_POST["mail"]) && !empty($_POST["mail"])
        && isset($_POST["password"]) && !empty($_POST["password"])) {
            $mail=$_POST["mail"];
            $password=$_POST["password"];
            $data=$serviceuser->searchUser($mail);
                if ($passwordOk=$serviceuser->passwordVerify($password,$data)){
                    $_SESSION["mail"]=$mail;
                    $_SESSION["profil"]=$data["profil"];
                    header('Location: accueilCONTROLEUR.php');
                } else {
                    header('Location: connexionCONTROLEUR.php?warning=failconnexion');
                }
        }
    }

displayPageConnexion();

//     if (isset($_GET['warning']) && $_GET['warning']=='failconnexion') {
//         displayConnexionKo();
//     } 

// displayConnexion2();

?>