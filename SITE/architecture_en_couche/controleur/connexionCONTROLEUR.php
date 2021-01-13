<?php

// LIAISONS AVEC LES AUTRES COUCHES //
include_once("../presentation/connexionPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");

// GESTION DES ERREURS //
include_once("../service/ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


try {
    // Démarre une nouvelle session ou reprend une session déjà existante //
    session_start();
    
    // On instancie un objet //
    $utilisateurservice = new UtilisateurService();

        // Vérifications et affichage //
        if (isset($_GET["action"]) && $_GET["action"]=="connexion" && !empty($_POST)) { 
            if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
            && isset($_POST["password"]) && !empty($_POST["password"])) {
                
                $var1 = htmlentities($_POST["pseudo"]); // contre attaques xss ou cross-site scripting //
                $var2 = htmlentities($_POST["password"]);
                
                $pseudo=$var1;
                $password=$var2;

                    try {
                        $data=$utilisateurservice->chercherUtilisateurParPseudo($pseudo); // on chercher l'utilisateur dans la bdd //

                        if ($passwordOk=$utilisateurservice->passwordVerify($password,$data)){ // on vérifie la concordance des mots de passe //
                            $_SESSION["pseudo"]=$pseudo;
                            header('Location: accueilCONTROLEUR.php');
                        } else {
                            displayNotIdem(); // si le mot de passe de connexion ne correspond pas à celui de l'inscription //
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