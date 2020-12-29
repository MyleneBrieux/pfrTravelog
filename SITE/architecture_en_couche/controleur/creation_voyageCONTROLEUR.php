<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/creation_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");

//ajout OOP

   
if(isset($_GET["action"]) && $_GET["action"] == "creation" && !empty($_POST)){
        
    if (isset($_POST["titre"]) && !Empty($_POST["titre"])
        && isset($_POST["resume"]) && !Empty($_POST["resume"])
        && isset($_POST["datedebut"]) && !Empty($_POST["datedebut"])
        && isset($_POST["datefin"]) && !Empty($_POST["datefin"])
        && isset($_POST["couverture"]) && !Empty($_POST["couverture"])){
            
        $voyage = new Etape(
            $codeVoyage=(int)htmlentities($_POST["codeVoyage"]=null),
            $titre=htmlentities($_POST["titre"]),
            $resume=htmlentities($_POST["resume"]),
            $datedebut=($_POST["datedebut"]),
            $datefin=($_POST["datefin"]),
            $couverture=htmlentities($_POST["couverture"]),
            $statut=htmlentities($_POST["statut"]=null),
            $likes=(int)htmlentities($_POST["likes"]=null),
            $vues=(int)htmlentities($_POST["vues"]=null),
            $codeEtape=(int)htmlentities($_POST["codeEtape"]=null),
            $sousTitre=htmlentities($_POST["sous_titre"]),
            $description=htmlentities($_POST["description"]), 
            $media=htmlentities($_POST["media"]=null),
            $likesEtape=(int)htmlentities($_POST["likesEtape"]=null)
        ); 
        
        $addEtape= new VoyageService;
        $addEtape->addEtapeService($sousTitre, $description);

        $addVoyage= new VoyageService;
        $addVoyage->addVoyageService($titre, $resume, $datedebut, $datefin, $couverture);
        // if ($passwordOk=$utilisateurservice->passwordVerify($password,$data)){
            header('Location: detail_voyageCONTROLEUR.php');
        // }
    
    }
}


creation_headBodyTop();
creation_corpsPage();
creation_basPage();