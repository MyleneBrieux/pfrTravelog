<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

    public function __construct(){
        $this->VoyageMysqliDao = new VoyageMysqliDao;
    }

// ajout Voyage

    public function addVoyageService($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $id/*, $codeEtape*/){
        $addVoyage= new VoyageMysqliDAO;
    $addVoyage->addVoyageDAO($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $id/*, $codeEtape*/);
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

//Afficher voyages

    public function afficherVoyages(){
        $this->VoyageMysqliDao->afficherVoyages();
    }

}