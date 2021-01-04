<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

session_start();

$voyageService = new VoyageService();

displayPageAccueil1();
include ("navbarCONTROLEUR.php");
displayPageAccueil2();
include ("menulatCONTROLEUR.php");

displayTripResults1();
$data=$voyageService->compterVoyages();
echo ($data . " voyages trouvés");

displayPageAccueil3();
include ("footerCONTROLEUR.php");
displayPageAccueil4();

?>