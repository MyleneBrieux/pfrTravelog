<?php
    
    //session_start();

include_once '../presentation/monProfilPresentation.php';
include_once '../service/UtilisateurSERVICE.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';

    //$pseudo = htmlentities($_GET["pseudo"]);
    //try{
        //$utilisateur = utilisateurSERVICE::chercherPseudo($pseudo);
    //}catch(UtilisateurException $e){
        //
    //}
profilDebut();

menuLat();

presentationUser();

voyages();

profilFin();

?>