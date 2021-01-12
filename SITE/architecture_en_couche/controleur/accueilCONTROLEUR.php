<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

session_start();

$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();

displayPageAccueil1();

// compteur de voyages trouvés dans la bdd //
$data=$voyageService->compterVoyages();
echo ($data . " voyages trouvés");

displayPageAccueil2();

// affichage dynamique des voyages dans le corps de page //
$rs=$voyageService->afficherVoyages();
    
    while($data=mysqli_fetch_array($rs)){
        displayDatasTable1($data);
        $id=$data["id"];
        $donnee=$utilisateurService->afficherPseudoDepuisId($id);
        displayPseudoTable($donnee);
        displayDatasTable2($data);
    }

displayPageAccueil3();

?>