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
            
            $var1 = htmlentities($_POST["pseudo"]);
            $var2 = htmlentities($_POST["mail"]);
            $var3 = htmlentities($_POST["password"]);

            $pseudo=$var1;
            $mail=$var2;
            $password=$var3;

            $data=$utilisateurservice->chercherUtilisateurParMail($mail);
            $info=$utilisateurservice->chercherUtilisateurParPseudo($pseudo);

                if (!empty($data) && ($_POST["mail"]) == ($data["mail"])){
                    displayMailUsed();
                } else if (!empty($info) && ($_POST["pseudo"]) == ($info["pseudo"])) {
                    displayPseudoUsed();
                } else if (($_POST["password"]) != ($_POST["confirmpassword"])) {
                    displayDifferentPasswords();
                } else {
                    $newPassword=$utilisateurservice->passwordHash($password);
                    $utilisateurservice->ajoutUtilisateur($pseudo,$mail,$newPassword);
                    header('Location: connexionCONTROLEUR.php');
                }  

        }
    }

displayPageInscription();

?>