<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/accueilPRESENTATION.php");
include_once("../service/UtilisateurSERVICE.php");
include_once("../service/VoyageSERVICE.php");
include_once("../metier/Utilisateur.php");
include_once("../metier/Voyage.php");

// GESTION DES ERREURS //
include_once("../service/ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// Démarre une nouvelle session ou reprend une session déjà existante //
try {
    session_start();

    // On instancie des objets //
    $utilisateurService = new UtilisateurService();
    $voyageService = new VoyageService();
    
    // Pagination //
    try {
        $nbVoyages=$voyageService->compterVoyages(); // nb total de voyages //
    } catch (ServiceException $b) {
        erreurs($b->getCode(), $b->getMessage());
    }

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
    
    echo ("Au total, les membres de Travelog ont réalisé " . $nbVoyages . " voyages"); // compteur de voyages trouvés dans la bdd //

    $filtreContinent=$voyageService->filtrerContinents(); // filtre continents
    inputContinent($filtreContinent);
    $filtrePays=$voyageService->filtrerPays(); // filtre pays
    inputPays($filtrePays);

    displayColTable();

    try {
        $rs=$voyageService->afficherVoyagesAccueil($start,$nbParPage); // affichage dynamique des voyages dans le corps de page //
    } catch (ServiceException $c) {
        erreurs($c->getCode(), $c->getMessage());
    }
        
        while($data=mysqli_fetch_array($rs)){
            displayDatasTable1($data);
            $id=$data["id"];

            try {
                $donnee=$utilisateurService->afficherPseudoDepuisId($id);
            } catch (ServiceException $d) {
                erreurs($d->getCode(), $d->getMessage());
            }

            displayPseudoTable($donnee);
            displayDatasTable2($data);
        }
    
    displayBottomTable();
    
    displayPagination($page, $nbPages); //on fournit les valeurs pour la pagination
    
    displayPageAccueil2();

} catch (ServiceException $a) {
    erreurs($a->getCode(), $a->getMessage());
}
?>