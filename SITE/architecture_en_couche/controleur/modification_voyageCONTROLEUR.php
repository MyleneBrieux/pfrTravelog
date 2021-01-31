<?php
session_start();
// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/modification_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
include("../service/UtilisateurSERVICE.php");

if(!isset($_GET["code_voyage"]) && (!isset($_GET["code_etape"]))){
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
    $idCreateur=$detailVoyage["id"];



if(!isset($_SESSION["pseudo"]) || $idVisiteur!=$idCreateur){
    header('Location: accueilCONTROLEUR.php');
}




if(isset($_GET["action"]) && $_GET["action"] == "modification" && !empty($_POST)){
    
    $detailEtape=new VoyageService();
    $codeEtape = htmlentities(trim($_GET['code_etape']));
    $detailEtape=$detailEtape->afficherLesDetailsEtapeService($codeEtape);

    if (isset($_POST["titre"]) && !Empty($_POST["titre"])
        && isset($_POST["resume"]) && !Empty($_POST["resume"])
        && isset($_POST["date_debut"]) && !Empty($_POST["date_debut"])
        && isset($_POST["date_fin"]) && !Empty($_POST["date_fin"])
        && isset($_POST["continent"]) && !Empty($_POST["continent"])
        && isset($_POST["pays"]) && !Empty($_POST["pays"])
        && isset($_POST["ville"]) && !Empty($_POST["ville"])){

            if(!isset($_POST["statut"])){
                $_POST["statut"]="Public";
            }
            
        $voyage = new Etape(
            $codeVoyage=(int)htmlentities($detailVoyage["code_voyage"]),
            $titre=htmlentities($_POST["titre"]),
            $resume=htmlentities($_POST["resume"]),
            $date_debut=($_POST["date_debut"]),
            $date_fin=($_POST["date_fin"]),
            $continent=htmlentities($_POST["continent"]),
            $pays=htmlentities($_POST["pays"]),
            $ville=htmlentities($_POST["ville"]),
            $couverture=htmlentities($detailVoyage["couverture"]),
            $statut=htmlentities($_POST["statut"]),
            $likes=(int)htmlentities($_POST["likes"]=null),
            $vues=(int)htmlentities($_POST["vues"]=null),
            $codeEtape=(int)htmlentities($detailVoyage["code_etape"]),
            $sousTitre=htmlentities($_POST["sous_titre"]),
            $description=htmlentities($_POST["description"])
        ); 

        $modifVoyage= new VoyageService;
        $modifVoyage->modifEtapeService($sousTitre, $description, $codeEtape);

        $pseudo=$_SESSION["pseudo"];
        $data=new UtilisateurService();
        $data=$data->chercherUtilisateurParPseudo($pseudo);
        $id=$data["id"];

        
        
        $modifVoyage->modifVoyageService($titre, $resume, $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage);
        header('Location: mesVoyagesControleur.php?pseudo='.$pseudo.'');
    }
}

if (isset($_GET['code_voyage']) && isset($_GET['code_etape'])){
$voyage=new VoyageService();
$codeVoyage = htmlentities(trim($_GET['code_voyage']));
$detailVoyage=$voyage->afficherLesDetailsVoyageService($codeVoyage);

$codeEtape = htmlentities(trim($_GET['code_etape']));
$detailEtape=$voyage->afficherLesDetailsEtapeService($codeEtape);



modification_headBodyTop();
modification_corpsPage($detailVoyage, $detailEtape);
modification_basPage();
}



