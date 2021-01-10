<?php

include_once("../presentation/connexionPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");


session_start();


$utilisateurservice = new UtilisateurService();

    if (isset($_GET["action"]) && $_GET["action"]=="connexion" && !empty($_POST)) { 
        if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
        && isset($_POST["password"]) && !empty($_POST["password"])) {
            
            $var1 = htmlentities($_POST["pseudo"]);
            $var2 = htmlentities($_POST["password"]);
            
            $pseudo=$var1;
            $password=$var2;

            $data=$utilisateurservice->chercherUtilisateurParPseudo($pseudo);

                if ($passwordOk=$utilisateurservice->passwordVerify($password,$data)){
                    $_SESSION["pseudo"]=$pseudo;
                    header('Location: accueilCONTROLEUR.php');
                } else {
                    displayNotIdem();
                }
                
        } 
    }

displayPageConnexion();

?>