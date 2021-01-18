<?php
session_start();
// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/detail_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
include("../service/UtilisateurSERVICE.php");

$numDiapo=0;

$pseudo=$_SESSION["pseudo"];
        $visiteur=new UtilisateurService();
        $visiteur=$visiteur->chercherUtilisateurParPseudo($pseudo);
        $idVisiteur=$visiteur["id"];

        $detailVoyage=new VoyageService();
        $codeVoyage = htmlentities(trim($_GET['code_voyage']));
        $detailVoyage=$detailVoyage->afficherLesDetailsVoyageService($codeVoyage);

        // if($detailVoyage["statut"]=="Prive"/* && $_SESSION["ami"]*/){ 
            // header('Location: accueilCONTROLEUR.php');
        // }

        $titre=$detailVoyage["titre"];
        $datedebut=$detailVoyage["date_debut"];
        $datefin=$detailVoyage["date_fin"];
        $likes=$detailVoyage["likes"];
        $idCreateur=$detailVoyage["id"];
        $couverture=$detailVoyage["couverture"];
        $vues=$detailVoyage["vues"];
        $vues++;
        $vuesVoyage=new VoyageService();
        $vuesVoyage=$vuesVoyage->nbrVuesVoyageService($vues,$codeVoyage);
        // $couvertureImplode=implode("", $couverture);

        $createur=new UtilisateurService();
        $createur=$createur->chercherUtilisateurParId($idCreateur);

        $detailEtape=new VoyageService();
        $codeEtape = htmlentities(trim($_GET['code_etape']));
        $detailEtape=$detailEtape->afficherLesDetailsEtapeService($codeEtape);
        $sousTitre=$detailEtape["sous_titre"];
        $description=$detailEtape["description"];

        if (isset($_GET["action"]) && ($_GET["action"])=="commentaire"){
            $id=$idVisiteur;
            $commentaire=$_POST["commentaire"];
            $ajoutComm=new VoyageService();
            $ajoutComm=$ajoutComm->addCommentaireService($commentaire, $id, $codeEtape);
        }

        $commVoyage=new VoyageService();
        $commVoyage=$commVoyage->nbrCommentaireDansUnVoyageService($codeEtape);

        $detailComm=new VoyageService();
        $rs=$detailComm->afficherLesDetailsCommentaireService($codeEtape);
        // print_r($rs);
        // if (isset($detailComms["commentaire"])){
            
        // }


        // if (isset($codeVoyage, $idVisiteur)){
        // $quiAddLike=new VoyageService();
        // $quiAddLike=$quiAddLike->quiAddLikesService($likes, $codeVoyage, $id);
        // $quiLikes=$quiAddLike["id_like"];
        // }

detail_headBodyTop();

detail_headerEtMenuLateral($titre, $datedebut, $datefin, $likes, $vues, $createur);

            
// Bouton suppression du voyage visible que par le créateur

if ($idVisiteur==$idCreateur){
    detail_boutonModif($codeVoyage, $codeEtape);
    detail_boutonSupp();
}

detail_menuFinEtNav();

// foreach 
detail_carousel($couverture, $numDiapo);
// echo($couverture);
// echo "likes ".$likes;
// echo "CODEVOYAGE ".$codeVoyage;

detail_restePage($sousTitre,$description,$codeVoyage,$codeEtape,$commVoyage);

    while($data=mysqli_fetch_array($rs)){
        if (isset($data["commentaire"]) && $codeEtape==$data["code_etape"]){
        $comm=$data["commentaire"];
        $idCommentateur=$data["id"];

        $commentateur=new UtilisateurService();
        $commentateur=$commentateur->chercherUtilisateurParId($idCommentateur);
        $pseudoComm=$commentateur["pseudo"];
        
        detail_zoneComm($pseudoComm,$comm,$idVisiteur,$idCommentateur);
    }
}
detail_basPage();