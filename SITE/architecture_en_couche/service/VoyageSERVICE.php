<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

// ajout Voyage

    public function addVoyageService($titre, $resume, $datedebut, $datefin, $couverture){
        $addVoyage= new VoyageMysqliDAO;
        $addVoyage->addVoyageDAO($titre, $resume, $datedebut, $datefin, $couverture);
        return $addVoyage;
    }

    public function addEtapeService($sousTitre, $description){
        $addEtape= new VoyageMysqliDAO;
        $addEtape->addEtapeDAO($sousTitre, $description);
        return $addEtape;
    }

// suppression Voyage

    public function suppVoyageService(int $codeVoyage){
            $suppVoyage= new VoyageMysqliDAO;
            $suppVoyage->suppVoyageDAO($codeVoyage);
    }

//Modif Voyage

    public function modifVoyageService($voyage){
            $modifVoyage= new VoyageMysqliDAO;
            $modifVoyage->modifVoyageDAO($voyage);
    }

}