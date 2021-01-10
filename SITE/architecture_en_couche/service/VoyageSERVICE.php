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

//Rechercher les continents

    public function chercherContinents(){
        $continents=$this->voyageDao->chercherContinents();
        return $continents;
    }

//Rechercher les pays

public function chercherPays(){
    $pays=$this->voyageDao->chercherPays();
    return $pays;
}

//Rechercher les villes

public function chercherVilles(){
    $villes=$this->voyageDao->chercherVilles();
    return $villes;
}


//Afficher le voyage le plus récent d'un utilisateur

    public function VoyagePlusRecentUtilisateur($pseudo){
        $mostRecentVoyage = $this->voyageDao->VoyagePlusRecentUtilisateur($pseudo);
        return $mostRecentVoyage;
    }

//Afficher le voyage le plus populaire d'un utilisateur

    public function VoyagePlusPopulaireUtilisateur($pseudo){
        $mostPopularVoyage = $this->voyageDao->VoyagePlusPopulaireUtilisateur($pseudo);
        return $mostPopularVoyage;
    }

//Récupérer commentaire depuis notification

    public function recupererCommentaire(int $codeComm) {
        $comm = $this->voyageDao->recupererCommentaire($codeComm);
        return $comm;
    }

//Récupérer les informations d'un voyage depuis son code

    public function chercherVoyageParCode($codeVoyage) : ?array {
        $voyage = $this->voyageDao->chercherVoyageParCode($codeVoyage);
        return $voyage;
    }

}