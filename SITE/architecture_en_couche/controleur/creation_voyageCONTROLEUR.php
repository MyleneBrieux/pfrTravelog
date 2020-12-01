<?php

// LIAISON AVEC AUTRES COUCHES //
include_once("../presentation/creation_voyagePRESENTATION.php");
// include_once("../service/creation_voyageVoyageSERVICE.php");
include_once("../metier/Voyage.php");

//ajout de VOYAGE

   
if(isset($_GET["action"]) && $_GET["action"] == "ajout"){
        
    if (isset($_POST["noemp"]) && !Empty($_POST["noemp"])
        && isset($_POST["noserv"]) && !Empty($_POST["noserv"])){
    
        $employe = new Employe(
        $_POST["noemp"],
        $_POST["nom"]?$_POST["nom"]:null,
        $_POST["prenom"]?$_POST["prenom"]:null,
        $_POST["emploi"]?$_POST["emploi"]:null,
        $_POST["sup"]?$_POST["sup"]:null,
        $_POST["embauche"]?$_POST["embauche"]:null,
        $_POST["sal"]?$_POST["sal"]:null,
        $_POST["comm"]?$_POST["comm"]:null,
        $_POST["noserv"]);

        try {
            $addEmp= new EmployeService;
            $addEmp->addEmployeService($employe);
        
        }catch(addEmployeServiceException $ese){
            AddMessageErreur($ese->getMessage(),$ese->getCode());
        }

    }
}


creation_headBodyTop();
creation_corpsPage();
creation_basPage();