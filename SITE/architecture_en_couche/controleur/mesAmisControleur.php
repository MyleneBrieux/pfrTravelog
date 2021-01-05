<?php

session_start();

if(!isset ($_SESSION["pseudo"])){
    header("Location: connexionCONTROLEUR.php");
}

include_once '../presentation/mesAmisPresentation.php';
include '../metier/Utilisateur.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities($_GET["pseudo"]);
$utilisateur = new UtilisateurService();
//try{
    $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo);
    if (isset ($profil['birthday']) && !empty ($profil['birthday'])) {
        $dateNaissance = new DateTime($profil['birthday']);
        $dateAjd = new DateTime();
        $age = date_diff($dateNaissance, $dateAjd);
    }
//}catch(UtilisateurException $e){
    //
//}

amisDebut();

menuLat($profil, $age);

listeAmis();

contenuListeAmis();

finAmis();

?>