<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/menulatPRESENTATION.php");
include_once("../service/VoyageSERVICE.php");


$voyageService = new VoyageService();


displayTopMenuLat();

$continents=$voyageService->chercherContinents();    
    while($data=mysqli_fetch_array($continents)){
        displayContinents($data);
    }

displayTitrePays();

$pays=$voyageService->chercherPays();    
    while($data=mysqli_fetch_array($pays)){
        displayPays($data);
    }

displayTitreVille();

$villes=$voyageService->chercherVilles();    
    while($data=mysqli_fetch_array($villes)){
        displayVilles($data);
    }


displayBottomMenuLat();

?>