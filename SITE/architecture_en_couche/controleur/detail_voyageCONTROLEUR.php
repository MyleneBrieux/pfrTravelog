<?php
session_start();
// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/detail_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
include("../service/UtilisateurSERVICE.php");

$numDiapo=0;

$pseudo=$_SESSION["pseudo"];
        $data=new UtilisateurService();
        $data=$data->chercherUtilisateurParPseudo($pseudo);
        $id=$data["id"];

        $detailVoyage=new VoyageService();
        $codeVoyage = htmlentities(trim($_GET['code_voyage']));
        $detailVoyage=$detailVoyage->afficherLesDetailsVoyageService($codeVoyage);
        $titre=$detailVoyage["titre"];
        $datedebut=$detailVoyage["date_debut"];
        $datefin=$detailVoyage["date_fin"];
        $likes=$detailVoyage["likes"];
        $vues=$detailVoyage["vues"];
        $couverture=$detailVoyage["couverture"];
        // $couvertureImplode=implode("", $couverture);

        $detailEtape=new VoyageService();
        $codeEtape = htmlentities(trim($_GET['code_etape']));
        $detailEtape=$detailEtape->afficherLesDetailsEtapeService($codeEtape);
        $sousTitre=$detailEtape["sous_titre"];
        $description=$detailEtape["description"];

// if($id==$data["id"]){
    $isMyVoyage=true;
// }



detail_headBodyTop();

detail_headerEtMenuLateral($titre, $datedebut, $datefin, $likes, $vues);

// Bouton suppression du voyage visible que par le créateur

if ($isMyVoyage==true){
    detail_boutonSupp();
}

detail_menuFinEtNav();

// foreach 
detail_carousel($couverture, $numDiapo);
echo($couverture);
detail_restePage($sousTitre,$description);

detail_basPage();