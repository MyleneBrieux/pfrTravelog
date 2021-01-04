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

// compteur de voyages trouvés dans la bdd //
displayTripResults1();
$data=$voyageService->compterVoyages();
echo ($data . " voyages trouvés");

displayTripResults2();

// affichage dynamique des voyages dans le corps de page //
$rs=$voyageService->afficherVoyages();
while ($data=mysqli_fetch_array($rs)) {
displayTrip($data);
}

displayPages();

include ("footerCONTROLEUR.php");
displayPageAccueil3();

?>