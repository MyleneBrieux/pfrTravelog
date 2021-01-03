<?php

session_start();

include_once '../presentation/monProfilPresentation.php';
include_once '../service/UtilisateurSERVICE.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';

    $pseudo = htmlentities(trim($_GET['pseudo']));
    $utilisateur = new UtilisateurService();
    // try{
        $profil = $utilisateur->chercherUtilisateurParPseudo($pseudo);
    // }catch(UtilisateurException $e){
        
    // }

// $voyage = VoyageSERVICE:: ;

profilDebut();

menuLat($profil);

presentationUser($profil);

voyages($profil);

profilFin();

?>