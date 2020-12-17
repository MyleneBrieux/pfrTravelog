<?php
    //session_start();
    //if(!isset ($_SESSION["mail"])){
    //     header("Location: connexionCONTROLEUR.php");
    // }

include_once '../presentation/mesAmisPresentation.php';
include '../metier/Utilisateur.php';
include_once '../service/UtilisateurSERVICE.php';

amisDebut();

menuLat();

listeAmis();

contenuListeAmis();

nbPages();

finAmis();

?>