<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/creation_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
// include("../metier/Voyage.php");

//ajout OOP

   
if(isset($_GET["action"]) && $_GET["action"] == "creation" && !empty($_POST)){
        
    if (isset($_POST["titre"]) && !Empty($_POST["titre"])
        && isset($_POST["resume"]) && !Empty($_POST["resume"])
        && isset($_POST["datedebut"]) && !Empty($_POST["datedebut"])
        && isset($_POST["datefin"]) && !Empty($_POST["datefin"])
        && isset($_POST["couverture"]) && !Empty($_POST["couverture"])){
            
            $voyage = new Voyage( 
                $codeVoyage=(int)htmlentities($_POST["codeVoyage"]=null),
                $titre=htmlentities($_POST["titre"]),
                $resume=htmlentities($_POST["resume"]),
                $datedebut=($_POST["datedebut"]),
                $datefin=($_POST["datefin"]),
                $couverture=htmlentities($_POST["couverture"]),
                $statut=htmlentities($_POST["statut"]="Y"),
                $likes=(int)htmlentities($_POST["likes"]=null),
                $vues=(int)htmlentities($_POST["vues"]=null)
            ); 
            $addVoyage= new VoyageService;
        $addVoyage->addVoyageService(/*$codeVoyage, */$titre, $resume, $datedebut, $datefin, $couverture/*, $statut, $likes, $vues*/);
       
    // try {
            
    // }catch(addEmployeServiceException $ese){
    //     AddMessageErreur($ese->getMessage(),$ese->getCode());
    // }

}
}


creation_headBodyTop();
creation_corpsPage();
creation_basPage();