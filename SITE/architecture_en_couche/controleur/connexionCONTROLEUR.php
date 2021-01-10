<?php

// LIAISONS AVEC LES AUTRES COUCHES //
include_once("../presentation/connexionPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");

// GESTION DES ERREURS //
include_once("../service/ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try {
    session_start();
    
    $utilisateurservice = new UtilisateurService();

        if (isset($_GET["action"]) && $_GET["action"]=="connexion" && !empty($_POST)) { 
            if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
            && isset($_POST["password"]) && !empty($_POST["password"])) {
                
                $var1 = htmlentities($_POST["pseudo"]);
                $var2 = htmlentities($_POST["password"]);
                
                $pseudo=$var1;
                $password=$var2;

                    try {
                        $data=$utilisateurservice->chercherUtilisateurParPseudo($pseudo);

                        if ($passwordOk=$utilisateurservice->passwordVerify($password,$data)){
                            $_SESSION["pseudo"]=$pseudo;
                            header('Location: accueilCONTROLEUR.php');
                        } else {
                            displayNotIdem();
                        }
                    } catch (ServiceException $b) {
                        erreur($b->getCode(), $b->getMessage());
                    }
                    
            } 
        }

    displayPageConnexion();

} catch (ServiceException $a) {
    erreur($a->getCode(), $a->getMessage());
}

?>