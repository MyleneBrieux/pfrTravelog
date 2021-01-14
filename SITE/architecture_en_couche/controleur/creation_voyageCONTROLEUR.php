<?php
session_start();

if(!isset($_SESSION["pseudo"])){ 
    header('Location: connexionCONTROLEUR.php');
}

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/creation_voyagePRESENTATION.php");
include("../service/VoyageSERVICE.php");
include("../service/UtilisateurSERVICE.php");


//ajout OOP

if(isset($_GET["action"]) && $_GET["action"] == "creation" && !empty($_POST)){

    if (isset($_POST["titre"]) && !Empty($_POST["titre"])
        && isset($_POST["resume"]) && !Empty($_POST["resume"])
        && isset($_POST["date_debut"]) && !Empty($_POST["date_debut"])
        && isset($_POST["date_fin"]) && !Empty($_POST["date_fin"])
        && isset($_POST["continent"]) && !Empty($_POST["continent"])
        && isset($_POST["pays"]) && !Empty($_POST["pays"])
        && isset($_POST["ville"]) && !Empty($_POST["ville"])
        && isset($_POST["couverture"]) && !Empty($_POST["couverture"])){

            if(!isset($_POST["statut"])){
                $_POST["statut"]="Public";
            }

        $voyage = new Etape(
            $codeVoyage=(int)htmlentities($_POST["code_voyage"]=null),
            $titre=htmlentities($_POST["titre"]),
            $resume=htmlentities($_POST["resume"]),
            $datedebut=($_POST["date_debut"]),
            $datefin=($_POST["date_fin"]),
            $continent=htmlentities($_POST["continent"]),
            $pays=htmlentities($_POST["pays"]),
            $ville=htmlentities($_POST["ville"]),
            $couverture=htmlentities($_POST["couverture"]),
            $statut=htmlentities($_POST["statut"]),
            $likes=(int)htmlentities($_POST["likes"]=null),
            $vues=(int)htmlentities($_POST["vues"]=null),
            $codeEtape=(int)htmlentities($_POST["code_etape"]=null),
            $sousTitre=htmlentities($_POST["sous_titre"]),
            $description=htmlentities($_POST["description"]),
            $likesEtape=(int)htmlentities($_POST["likesEtape"]=null)
        ); 

        $addEtape= new VoyageService;
        $addEtape->addEtapeService($sousTitre, $description);

        $pseudo=$_SESSION["pseudo"];
        $data=new UtilisateurService();
        $data=$data->chercherUtilisateurParPseudo($pseudo);
        $id=$data["id"];

        $addVoyage= new VoyageService;
        $addVoyage->addVoyageService($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $statut, $id);
            header('Location: mesVoyagesControleur.php?pseudo='.$pseudo.'');

    }
}

creation_headBodyTop();
creation_corpsPage();
creation_basPage();




