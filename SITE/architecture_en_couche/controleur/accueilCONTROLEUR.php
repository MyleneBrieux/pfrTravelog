<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");


// session_start();

displayPageAccueil1();
// include ("../presentation/navbar2PRESENTATION.php");
include ("navbarCONTROLEUR.php");
displayPageAccueil2();
include ("menulatCONTROLEUR.php");
displayPageAccueil3();
include ("footerCONTROLEUR.php");
displayPageAccueil4();

?>