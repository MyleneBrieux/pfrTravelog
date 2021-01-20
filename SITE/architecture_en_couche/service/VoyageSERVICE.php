<?php

// LIAISON AVEC AUTRE COUCHE //
include_once("../dao/VoyageMysqliDAO.php");

// GESTION DES ERREURS //
include_once("ServiceException.php");
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


class VoyageService {

    public function __construct(){
        $this->voyageDao = new VoyageMysqliDAO;
    }

    public function connexion() {
        try {
            $mysqli = $this->utilisateurDao->connexion();
            return $mysqli;
        } catch (DaoException $a){
            throw new ServiceException($a->getMessage(),$a->getCode());
        }
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

//Modif Comm

    public function modifCommService($commentaire, $codeComm){
        $modifComm= new VoyageMysqliDAO;
        $modifComm->modifCommDAO($commentaire, $codeComm);
    }

// Nombre de Likes

    public function addLikesService(int $codeVoyage,int $id){
        $addLikes= new VoyageMysqliDAO;
        $addLikes->addLikesDAO($codeVoyage, $id);
        return $addLikes;
    }

    public function nbrLikesService(int $codeVoyage){
        $nbrLikes = $this->voyageDao ->nbrLikesDAO($codeVoyage);
        return $nbrLikes;
    }

    public function quiAddLikesService(int $id){
        $whoLikes= new VoyageMysqliDAO;
        $whoLikes->quiAddLikesDAO($id);
        return $whoLikes;
    }


//Afficher voyages

public function afficherVoyagesAccueil($start,$nbParPage){
    try {
        $rs=$this->voyageDao->afficherVoyagesAccueil($start,$nbParPage);
        return $rs;
    } catch (DaoException $q){
        throw new ServiceException($q->getMessage(),$q->getCode());
    }

}

//Compter le nombre de voyages dans la bdd

    public function compterVoyages(){
        try {
            $nbVoyages = $this->voyageDao->compterVoyages();
            return $nbVoyages;
        } catch (mysqli_sql_exception $r) {
            throw new DaoException($r->getMessage(), $r->getCode());
        }
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

//Afficher voyages selon code_etape

    public function chercherVoyageParCodeEtape(int $codeEtape){
        $voyage = $this->voyageDao->chercherVoyageParCodeEtape($codeEtape);
        return $voyage;
    }

//Filtrer les continents

    public function filtrerContinents(){
        try {
            $data=$this->voyageDao->filtrerContinents();
            return $data;
        } catch (mysqli_sql_exception $u) {
            throw new DaoException($u->getMessage(), $u->getCode());
        }
    }

    //Filtrer les pays

    public function filtrerPays(){
        try {
            $data=$this->voyageDao->filtrerPays();
            return $data;
        } catch (mysqli_sql_exception $v) {
            throw new DaoException($v->getMessage(), $v->getCode());
        }
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
        try {
            $comm = $this->voyageDao->recupererCommentaire($codeComm);
            return $comm;
        } catch (mysqli_sql_exception $y) {
            throw new DaoException($y->getMessage(), $y->getCode());
        }
    }

//Supprimer une notification depuis son code
    public function supprimerNotification(int $codeNotif){
        try {
            $suppNotif= new VoyageMysqliDAO;
            $suppNotif->supprimerNotification($codeNotif);
        } catch (mysqli_sql_exception $z) {
            throw new DaoException($z->getMessage(), $z->getCode());
        }
    }

//Récupérer les informations d'un voyage depuis son code

    public function chercherEtapeParCode($codeEtape) : ?array {
        try {
            $etape = $this->voyageDao->chercherEtapeParCode($codeEtape);
            return $etape;
        } catch (mysqli_sql_exception $aa) {
            throw new DaoException($aa->getMessage(), $aa->getCode());
        }
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