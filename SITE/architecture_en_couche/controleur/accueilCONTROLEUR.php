<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

// Démarre une nouvelle session ou reprend une session déjà existante //
session_start();

// On instancie des objets //
$utilisateurService = new UtilisateurService();
$voyageService = new VoyageService();

// Pagination //
$nbVoyages=$voyageService->compterVoyages(); // nb total de voyages //
$nbParPage = 4; // nb de voyages par page //
$nbPages=ceil($nbVoyages/$nbParPage);  // nb de pages nécessaires //

    if (!isset($_GET['page'])){ // on détermine sur quelle page on est //
        $page=1; 
    } else {
        $page = $_GET['page']; 
    }

$start = ($page - 1) * $nbParPage; // page de départ //


// Affichage //
displayPageAccueil1();

echo ($nbVoyages . " voyages trouvés"); // compteur de voyages trouvés dans la bdd //

displayPageAccueil2();

$rs=$voyageService->afficherVoyagesAccueil($start,$nbParPage); // affichage dynamique des voyages dans le corps de page //
    
    while($data=mysqli_fetch_array($rs)){
        displayDatasTable1($data);
        $id=$data["id"];
        $donnee=$utilisateurService->afficherPseudoDepuisId($id);
        displayPseudoTable($donnee);
        displayDatasTable2($data);
    }

displayBottomTable();

displayPagination($page, $nbPages); //on fournit les valeurs pour la pagination

displayPageAccueil3();

?>