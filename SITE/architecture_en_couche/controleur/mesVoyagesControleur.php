<?php

session_start();

include_once '../presentation/mesVoyagesPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';
include_once '../service/VoyageSERVICE.php';
include_once '../service/UtilisateurSERVICE.php';

$pseudo = htmlentities(trim($_GET['pseudo']));
    $utilisateur = new UtilisateurService();
    $voyagesService = new VoyageService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo);
    // }catch(UtilisateurException $e){
        
    // }

    $info=$voyagesService->nbVoyagesUtilisateur($pseudo);
    // $voyages = $voyagesService->chercherVoyageParPseudo($pseudo);
    // var_dump($voyages);
    // var_dump($data);

voyagesDebut();

menuLat();

if ($_SESSION['pseudo'] && $_SESSION['pseudo']==$profil['pseudo']) {
    débutCorpsUtilisateur($info);
} else {
    débutCorpsVisiteur($profil, $info);
}

afficherVoyages();

nbPages();

voyagesFin();

?>