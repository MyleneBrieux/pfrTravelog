<?php

    //session_start();

include_once '../presentation/mesVoyagesPresentation.php';
include_once '../metier/Utilisateur.php';
include_once '../metier/Voyage.php';
include_once '../service/UtilisateurSERVICE.php';

voyagesDebut();

menuLat();

débutCorps();

afficherUser();

afficherVoyages();

nbPages();

voyagesFin();

?>