<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../metier/Utilisateur.php");


session_start();

displayPageAccueil1();
// include ("navbar.php");
displayPageAccueil2();
// include ("menulat.php");
displayPageAccueil3();
// include ("footerCONTROLEUR.php");
displayPageAccueil4();

?>