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
    
    echo ($nbVoyages . " voyages trouvés"); // compteur de voyages trouvés dans la bdd //

    displayPageAccueil2();

    $continents=$voyageService->chercherContinents();
    while($data=mysqli_fetch_array($continents)){
        selectContinents2($data);
    }

    displayPageAccueil3();




    $tabVoyages=$voyageService->chercherVoyages();
    while($data=mysqli_fetch_array($tabVoyages)){
        $codeVoyage=$data["code_voyage"];
        $titre=$data["titre"];
        $resume=$data["resume"];
        $dateDebut=$data["date_debut"];
        $dateFin=$data["date_fin"];
        $continent=$data["continent"];
        $pays=$data["pays"];
        $ville=$data["ville"];
        $couverture=$data["couverture"];
        $statut=$data["statut"];
        $likes=$data["likes"];
        $vues=$data["vues"];
        $id=$data["id"];
        $codeEtape=$data["code_etape"];

        $voyage=new Voyage($codeVoyage,$titre,$resume,$dateDebut,$dateFin,$continent,$pays,$ville,$couverture,$statut,$likes,$vues,$id,$codeEtape);
        $voyages[]=$voyage;
;    }

    if(!empty($_GET) && isset($_GET["continent"]) && !isset($_GET["afficher"])){ 
        $voyagesRetournes = filterVoyagesSelonContinentEtPays($voyages,$_GET["continent"]);
        afficherOptions($voyagesRetournes);
    } 

    function filterVoyagesSelonContinentEtPays(array $voyages, string $continent, string $pays=null) : array {
        $voyagesRetournes=[];
        foreach ($voyages as $voyage) { 
            if($pays && $continent && $continent == $voyage->continent && $pays == $voyage->pays){
                $voyagesRetournes[] = $voyage;
            } elseif(!$pays && $continent && $continent == $voyage->continent){ 
                $voyagesRetournes[]=$voyage; 
            } 
        }
        return $voyagesRetournes;
    }

    function afficherOptionsPays(array $voyagesRetournes){
        echo
            "<option value=''>-- Sélectionnez un pays --</option>"; 
        foreach ($voyagesRetournes as $voyage) { 
            echo
                "<option value='" . $voyage->pays . "'>" . $voyage->pays . "</option>"; 
        }
    }




    selectPays2();

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
    
    displayPageAccueil4();

} catch (ServiceException $a) {
    erreurs($a->getCode(), $a->getMessage());
}

?>