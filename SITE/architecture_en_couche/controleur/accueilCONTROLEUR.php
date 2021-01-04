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

// compteur de voyages trouvés dans la bdd //
$data=$voyageService->compterVoyages();
echo ($data . " voyages trouvés");

displayPageAccueil2();

// affichage dynamique des voyages dans le corps de page //
$rs=$voyageService->afficherVoyages();
while ($data=mysqli_fetch_array($rs)) { // commenter lignes 24 et 25 pour voir affichage "en dur" //
displayPageAccueil3($data);
}

// $data=mysqli_fetch_array($rs); // commenter lignes 28 à 32 pour affichage "en dur" //
// displayTripOne($data);
// displayTripTwo($data);
// displayTripThree($data);
// displayTripFour($data);

displayPageAccueil4();

?>