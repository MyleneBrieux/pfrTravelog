<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

    public function __construct(){
        $this->voyageDao = new VoyageMysqliDAO;
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

// afficher les infos du Voyage

    public function afficherLesDetailsVoyageService(int $codeVoyage) : ?array {
        $detailVoyage = $this->voyageDao ->afficherLesDetailsVoyageDAO($codeVoyage);
        return $detailVoyage;
    }

// afficher les infos du Voyage

    public function afficherLesDetailsEtapeService(int $codeEtape) : ?array {
        $detailEtape = $this->voyageDao ->afficherLesDetailsEtapeDAO($codeEtape);
        return $detailEtape;
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
        $rs=$this->voyageDao->afficherVoyages();
        return $rs;
    }

//Compter le nombre de voyages dans la bdd

    public function compterVoyages(){
        $data = $this->voyageDao->compterVoyages();
        return $data;
    }

//Compter le nombre de voyages d'un utilisateur

    public function nbVoyagesUtilisateur($pseudo){
        $info = $this->voyageDao->nbVoyagesUtilisateur($pseudo);
        return $info;
    }

//Afficher voyages selon pseudo

    public function chercherVoyagesParPseudo($pseudo){
        $voyagesService = $this->voyageDao->chercherVoyagesParPseudo($pseudo);
        return $voyagesService;
    }

//Afficher pseudo depuis id

    public function afficherPseudoDepuisId(int $id){
        $data = $this->voyageDao->afficherPseudoDepuisId($id);
        return $data;
    }
}