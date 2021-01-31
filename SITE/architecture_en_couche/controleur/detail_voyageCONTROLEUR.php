<?php
session_start();
// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/detail_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
include("../service/UtilisateurSERVICE.php");

if(!isset($_GET["code_voyage"]) || (!isset($_GET["code_etape"]))){
    header('Location: accueilCONTROLEUR.php');
}

if(isset($_SESSION["pseudo"])){
$pseudo=$_SESSION["pseudo"];
        $visiteur=new UtilisateurService();
        $visiteur=$visiteur->chercherUtilisateurParPseudo($pseudo);
        $idVisiteur=$visiteur["id"];
}
        $detailVoyage=new VoyageService();
        $codeVoyage = htmlentities(trim($_GET['code_voyage']));
        $detailVoyage=$detailVoyage->afficherLesDetailsVoyageService($codeVoyage);
        $correctCodeEtape=$detailVoyage["code_etape"];

        if($correctCodeEtape!=$_GET["code_etape"]){
            header('Location: accueilCONTROLEUR.php');
        }

        if(isset($_GET["action"]) && $_GET["action"] == "delete" && isset($_POST["deleted"])){
                $suppVoyage= new VoyageService;
                $suppVoyage->suppVoyageService($codeVoyage);
                header('Location: mesVoyagesCONTROLEUR.php');
        }

        $titre=$detailVoyage["titre"];
        $datedebut=$detailVoyage["date_debut"];
        $datefin=$detailVoyage["date_fin"];
        $idCreateur=$detailVoyage["id"];
        $couverture=$detailVoyage["couverture"];
        $vues=$detailVoyage["vues"];
        $vues++;
        $vuesVoyage=new VoyageService();
        $vuesVoyage=$vuesVoyage->nbrVuesVoyageService($vues,$codeVoyage);
        // $couvertureImplode=implode("", $couverture);

        $createur=new UtilisateurService();
        $createur=$createur->chercherUtilisateurParId($idCreateur);

        // if ()
        // $detailAmi=new UtilisateurService();
        // $detailAmi=$detailAmi->afficherRowAmi($idCreateur);
        // $ami=$detailAmi["accepte"];

        // if($detailVoyage["statut"]=="Prive" && $ami!="Y"){ 
        //     header('Location: accueilCONTROLEUR.php');
        // }

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

        $nbrLikes=new VoyageService();
        $nbrLikes=$nbrLikes->nbrLikesService($codeVoyage);


        // if (isset($codeVoyage, $idVisiteur)){
            if(isset($_SESSION["pseudo"])){
                $whoLikes=new VoyageService();
                $whoLikes=$whoLikes->quiAddLikesService($idVisiteur);
                if (isset($_GET["action"]) && ($_GET["action"])=="like"){
                    $addLikes= new VoyageService;
                    $addLikes->addLikesService($codeVoyage, $idVisiteur);
                }
            }
        // }

detail_headBodyTop();

detail_headerEtMenuLateral($titre, $datedebut, $datefin, $nbrLikes, $vues, $createur);

            
// Bouton suppression du voyage visible que par le créateur

if (isset($_SESSION["pseudo"]) && $idVisiteur==$idCreateur){

    detail_boutonModif($codeVoyage, $codeEtape);
    detail_boutonSupp($codeVoyage,$codeEtape);
}

detail_menuFinEtNav();
$numDiapo=0;
detail_carousel($couverture, $numDiapo);

detail_restePage($sousTitre,$description,$codeVoyage,$codeEtape,$commVoyage);

    while($data=mysqli_fetch_array($rs)){
        if (isset($data["commentaire"]) && $codeEtape==$data["code_etape"]){
        $comm=$data["commentaire"];
        $idCommentateur=$data["id"];
        $codeComm=$data["code_comm"];

        $commentateur=new UtilisateurService();
        $commentateur=$commentateur->chercherUtilisateurParId($idCommentateur);
        $pseudoComm=$commentateur["pseudo"];

        if (isset($_GET["action"]) && $_GET["action"] == "modifComm"){
            $modifComm=new VoyageService();
            $modifComm->modifCommService($comm, $codeComm);
        }

        detail_zoneComm($pseudoComm,$comm);
        if (isset($_SESSION["pseudo"]) && $idVisiteur==$idCommentateur){
            detail_boutonModifComm();
        }
        detail_modalModifComm($codeVoyage,$codeEtape,$comm);
        detail_finZoneComm();
    }
}
detail_basPage();