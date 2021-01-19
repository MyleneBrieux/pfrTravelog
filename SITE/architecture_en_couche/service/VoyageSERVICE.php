<?php

include_once("../dao/VoyageMysqliDAO.php");

class VoyageService {

    public function __construct(){
        $this->voyageDao = new VoyageMysqliDAO;
    }

// ajout Voyage

    public function addVoyageService($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $statut, $id/*, $codeEtape*/){
        $addVoyage= new VoyageMysqliDAO;
        $addVoyage->addVoyageDAO($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $statut, $id/*, $codeEtape*/);
        return $addVoyage;
    }

    public function addEtapeService($sousTitre, $description){
        $addEtape= new VoyageMysqliDAO;
        $addEtape->addEtapeDAO($sousTitre, $description);
        return $addEtape;
    }



    // Ajout comm

    public function addCommentaireService($commentaire, $id, $codeEtape){
        $addComm= new VoyageMysqliDAO;
        $addComm->addCommentaireDAO($commentaire, $id, $codeEtape);
        return $addComm;
    }

// Compter les vues
    public function nbrVuesVoyageService($vues,$codeVoyage){
        $vuesVoyage= new VoyageMysqliDAO;
        $vuesVoyage->nbrVuesVoyageDAO($vues,$codeVoyage);
        return $vuesVoyage;
    }

// Compter les commentaires
    public function nbrCommentaireDansUnVoyageService(int $codeEtape): ?int{
        $commVoyage = $this->voyageDao ->nbrCommentaireDansUnVoyageDAO($codeEtape);
        return $commVoyage;
    }

// afficher les infos du Voyage

    public function afficherLesDetailsVoyageService(int $codeVoyage) : ?array {
        $detailVoyage = $this->voyageDao ->afficherLesDetailsVoyageDAO($codeVoyage);
        return $detailVoyage;
    }

// afficher les infos du Etape

    public function afficherLesDetailsEtapeService(int $codeEtape) : ?array {
        $detailEtape = $this->voyageDao ->afficherLesDetailsEtapeDAO($codeEtape);
        return $detailEtape;
    }

    // Ajout comm

    public function afficherLesDetailsCommentaireService(int $codeEtape)/*: ?array*/{
        $rs= $this->voyageDao ->afficherLesDetailsCommentaireDAO($codeEtape);
        return $rs;
    }

// suppression Voyage

    public function suppVoyageService(int $codeVoyage){
            $suppVoyage= new VoyageMysqliDAO;
            $suppVoyage->suppVoyageDAO($codeVoyage);
    }

//Modif Voyage

    public function modifVoyageService($titre, $resume, $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage){
            $modifVoyage= new VoyageMysqliDAO;
            $modifVoyage->modifVoyageDAO($titre, $resume, $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage);
    }

//Modif Etape

    public function modifEtapeService($sousTitre, $description, $codeEtape){
        $modifEtape= new VoyageMysqliDAO;
        $modifEtape->modifEtapeDAO($sousTitre, $description, $codeEtape);
    }

// Nombre de Likes

    public function quiAddLikesService(int $likes, int $codeVoyage,int $id){
        $nbLikes= new VoyageMysqliDAO;
        $nbLikes->quiAddLikesDAO($likes, $codeVoyage, $id);
        return $nbLikes;
    }

//Afficher voyages

public function afficherVoyagesAccueil($start,$nbParPage){
    $rs=$this->voyageDao->afficherVoyagesAccueil($start,$nbParPage);
    return $rs;
}

//Compter le nombre de voyages dans la bdd

    public function compterVoyages(){
        $nbVoyages = $this->voyageDao->compterVoyages();
        return $nbVoyages;
    }

//Compter le nombre de voyages d'un utilisateur

    public function nbVoyagesUtilisateur($pseudo){
        $info = $this->voyageDao->nbVoyagesUtilisateur($pseudo);
        return $info;
    }

//Afficher voyages selon pseudo

    public function chercherVoyagesParPseudo($pseudo, $start, $nbParPage){
        $voyagesService = $this->voyageDao->chercherVoyagesParPseudo($pseudo, $start, $nbParPage);
        return $voyagesService;
    }

//Filtrer les continents

    public function filtrerContinents(){
        $data=$this->voyageDao->filtrerContinents();
        return $data;
    }

    //Filtrer les pays

    public function filtrerPays(){
        $data=$this->voyageDao->filtrerPays();
        return $data;
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

//Supprimer une notification depuis son code
    public function supprimerNotification(int $codeNotif){
        $suppNotif= new VoyageMysqliDAO;
        $suppNotif->supprimerNotification($codeNotif);
    }

//Récupérer les informations d'un voyage depuis son code

    public function chercherVoyageParCode($codeVoyage) : ?array {
        $voyage = $this->voyageDao->chercherVoyageParCode($codeVoyage);
        return $voyage;
    }

//Récupérer le nombre de continents visités

    public function compterContinentsUtilisateur($pseudo){
        $nbContinent = $this->voyageDao->compterContinentsUtilisateur($pseudo);
        return $nbContinent;
    }

//Récupérer le nombre de pays visités

    public function compterPaysUtilisateur($pseudo){
        $nbPays = $this->voyageDao->compterPaysUtilisateur($pseudo);
        return $nbPays;
    }

}