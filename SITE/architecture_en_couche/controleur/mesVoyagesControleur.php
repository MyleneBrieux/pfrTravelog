<?php

session_start();

include_once '../presentation/mesVoyagesPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities(trim($_GET['pseudo']));
    $utilisateur = new UtilisateurService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo);
    // }catch(UtilisateurException $e){
        
    // }

voyagesDebut();

menuLat();

if ($_SESSION['pseudo'] && $_SESSION['pseudo']==$profil['pseudo']) {
    débutCorpsUtilisateur();
    creationVoyage();
} else {
    débutCorpsVisiteur($profil);
    afficherUser($profil);
}

afficherVoyages();

nbPages();

voyagesFin();

?>