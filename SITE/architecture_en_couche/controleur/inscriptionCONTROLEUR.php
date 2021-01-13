<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/inscriptionPRESENTATION.php");
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
        if (isset($_GET["action"]) && $_GET["action"]=="inscription" && !empty($_POST)) {
            if (isset($_POST["pseudo"]) && !empty($_POST["pseudo"])
            && isset($_POST["mail"]) && !empty($_POST["mail"])
            && isset($_POST["password"]) && !empty($_POST["password"])
            && isset($_POST["confirmpassword"]) && !empty($_POST["confirmpassword"])
            && isset($_POST["checkcgu"])) {
                
                $var1 = htmlentities($_POST["pseudo"]); // contre attaques xss ou cross-site scripting //
                $var2 = htmlentities($_POST["mail"]);
                $var3 = htmlentities($_POST["password"]);
    
                $pseudo=$var1;
                $mail=$var2;
                $password=$var3;
    
                    try {
                        $data=$utilisateurservice->chercherUtilisateurParMail($mail); // on vérifie que le mail n'est pas déjà dans la bdd //
                    } catch (ServiceException $b) {
                        erreur($b->getCode(), $b->getMessage());
                    }

                    try {
                        $info=$utilisateurservice->chercherUtilisateurParPseudo($pseudo); // on vérifie que le pseudo n'est pas déjà dans la bdd //
                    } catch (ServiceException $c) {
                        erreur($c->getCode(), $c->getMessage());
                    }

                    if (!empty($data) && ($_POST["mail"]) == ($data["mail"])){ // si mail déjà utilisé //
                        displayMailUsed();
                    } else if (!empty($info) && ($_POST["pseudo"]) == ($info["pseudo"])) { // si pseudo déjà utilisé //
                        displayPseudoUsed();
                    } else if (($_POST["password"]) != ($_POST["confirmpassword"])) { // si les deux mdp ne correspondent pas //
                        displayDifferentPasswords();
                    } else {
                        try {
                            $newPassword=$utilisateurservice->passwordHash($password); // on crypte le mot de passe //
                        } catch (ServiceException $d) {
                            erreur($d->getCode(), $d->getMessage());
                        }

                        try {
                            $utilisateurservice->ajoutUtilisateur($pseudo,$mail,$newPassword); // ajout de l'utilisateur dans la bdd //
                        } catch (ServiceException $e) {
                            erreur($e->getCode(), $e->getMessage());
                        }

                        header('Location: connexionCONTROLEUR.php');
                        
                    }  
    
            }
        }
    
    displayPageInscription();

} catch (ServiceException $a) {
    erreur($a->getCode(), $a->getMessage());
}

?>