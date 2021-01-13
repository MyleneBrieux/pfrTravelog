<?php 

require_once("../metier/Voyage.php");
require_once("../metier/Utilisateur.php");
require_once("../metier/Etape.php");
require_once("../metier/Commentaire.php");

class VoyageMysqliDAO {

     /* CONNEXION */       
     public function connexion() {
        // $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
        $mysqli= new mysqli('localhost','root','','travelog');
        //$mysqli= new mysqli('localhost','romain_wyon','luna1004','travelog');
        return $mysqli;
    }

    public function nbrAjoutDAO(){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from etape");
        $stmt->execute();
        $rs=$stmt->get_result();
        $nbEtape=mysqli_num_rows($rs);
        $mysqli->close();
        return $nbEtape;
    }

    //ajout Voyage

    public function addVoyageDAO($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $statut, $id/*, $codeEtape*/){
        $mysqli=$this->connexion();
        $nbEtape=$this->nbrAjoutDAO();
        //modifier l'id user
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, titre, resume, date_debut, date_fin, continent, pays, ville, couverture, statut, likes, vues, id, code_etape) 
                                values (null,?,?,?,?,?,?,?,?,?,0,0,?,".$nbEtape.")");
        $stmt->bind_param("sssssssssi",$titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $statut, $id/*, $codeEtape*/);
        $stmt->execute();
        $mysqli->close();
    }

    // Ajout Etape
    public function addEtapeDAO($sousTitre, $description){
        $mysqli=$this->connexion();

        $stmt=$mysqli->prepare("insert into etape (code_etape, sous_titre, description, likesEtape, code_comm) values (null,?,?,0,null)");
        $stmt->bind_param("ss", $sousTitre, $description);
        $stmt->execute();
        $mysqli->close();
    }


    public function afficherLesDetailsVoyageDAO(int $codeVoyage): array{
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from voyages where code_voyage=?");
        $stmt->bind_param("i", $codeVoyage);
        $stmt->execute();
        $rs = $stmt->get_result();
        $detailVoyage = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $detailVoyage;
    }

    public function afficherLesDetailsEtapeDAO(int $codeEtape): array{
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from etape where code_etape=?");
        $stmt->bind_param("i", $codeEtape);
        $stmt->execute();
        $rs = $stmt->get_result();
        $detailEtape = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $detailEtape;
    }

    // suppression Voyage

    public function suppVoyageDAO(int $codeVoyage){
        $mysqli=$this->connexion();
        
        $stmt=$mysqli->prepare('delete from voyages where code_voyage= ?');
        $stmt->bind_param("i",$codeVoyage);
        $stmt->execute();
        $mysqli->close();
    }

    //Modif Voyage 

    public function modifVoyageDAO($titre, $resume, $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("update voyages set titre=?, resume=?, date_debut=?, date_fin=?, continent=?, pays=?, ville=?, couverture=?, statut=? where code_voyage= ?"); 
        $stmt->bind_param("sssssssssi", $titre, $resume, $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage);
        $stmt->execute();
        $mysqli->close();
    }

    //Modif Etape 

    public function modifEtapeDAO($sousTitre, $description, $codeEtape){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("update etape set sous_titre=?, description=? where code_etape= ?"); 
        $stmt->bind_param("ssi", $sousTitre, $description, $codeEtape);
        $stmt->execute();
        $mysqli->close();
    }


    /* AFFICHER TOUS LES VOYAGES */        
    public function afficherVoyagesAccueil($start, $nbParPage) {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from voyages order by date_debut desc limit ?,?');
        $stmt->bind_param("ii",$start, $nbParPage);
        $stmt->execute();
        $rs=$stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    /* COMPTER LE NOMBRE DE VOYAGES DANS LA BDD */
    public function compterVoyages() {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from voyages');
        $stmt->execute();
        $rs=$stmt->get_result();
        $data=mysqli_num_rows($rs);
        $mysqli->close();
        return $data;
    }

    /* COMPTER LE NOMBRE DE VOYAGES D'UN UTILISATEUR */
    public function nbVoyagesUtilisateur(string $pseudo) {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=?');
        $stmt->bind_param("s",$pseudo);
        $stmt->execute();
        $rs=$stmt->get_result();
        $info=mysqli_num_rows($rs);
        $mysqli->close();
        return $info;
    }

    /* RECHERCHE VOYAGE PAR PSEUDO */
    public function chercherVoyagesParPseudo(string $pseudo, $start, $nbParPage) {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select code_voyage, titre, resume, date_debut, date_fin, continent, pays, ville,
        couverture, statut, likes, vues, voyages.id, code_etape from voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=? limit ?,?");
        $stmt->bind_param("sii",$pseudo, $start, $nbParPage);
        $stmt->execute();
        $rs = $stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    // /* RECHERCHER LES CONTINENTS DE LA TABLE VOYAGES */
    // public function chercherContinents() {
    //     $mysqli=$this->connexion();
    //     $stmt=$mysqli->prepare('select distinct continent from voyages order by continent asc');
    //     $stmt->execute();
    //     $continents=$stmt->get_result();
    //     return $continents;
    //     $continent->free();
    //     $mysqli->close();
    // }

    // /* RECHERCHER LES PAYS DE LA TABLE VOYAGES */
    // public function chercherPays() {
    //     $mysqli=$this->connexion();
    //     $stmt=$mysqli->prepare('select distinct pays from voyages order by pays asc');
    //     $stmt->execute();
    //     $pays=$stmt->get_result();
    //     return $pays;
    //     $pays->free();
    //     $mysqli->close();
    // }

    // /* RECHERCHER LES VILLES DE LA TABLE VOYAGES */
    // public function chercherVilles() {
    //     $mysqli=$this->connexion();
    //     $stmt=$mysqli->prepare('select distinct ville from voyages order by ville asc');
    //     $stmt->execute();
    //     $villes=$stmt->get_result();
    //     return $villes;
    //     $ville->free();
    //     $mysqli->close();
    // }

    /* RECHERCHE VOYAGE LE + RÉCENT */
    public function VoyagePlusRecentUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT * FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=? ORDER BY code_voyage DESC LIMIT 1");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $rs = $stmt->get_result();
        $voyageRecent = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $voyageRecent;
    }

    /* RECHERCHE VOYAGE LE + POPULAIRE */
    public function VoyagePlusPopulaireUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT * FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=? ORDER BY likes AND vues DESC LIMIT 1");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $rs = $stmt->get_result();
        $voyagePopulaire = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $voyagePopulaire;
    }

    /* RECUPERER COMMENTAIRE DEPUIS NOTIFICATION */        
    public function recupererCommentaire(int $codeComm) {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from commentaires where code_comm=?');
        $stmt->bind_param("i",$codeComm);
        $stmt->execute();
        $rs=$stmt->get_result();
        $comm = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $comm;
    }

    /* CHERCHER VOYAGE PAR CODE VOYAGE */
    public function chercherVoyageParCode(int $codeVoyage) : ?array {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select * from voyages where code_voyage=?");
        $stmt->bind_param("i",$codeVoyage);
        $stmt->execute();
        $rs = $stmt->get_result();
        $voyage = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $voyage;
    }

    /* COMPTEUR CONTINENTS VISITES PAR L'UTILISATEUR */
    public function compterContinentsUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT COUNT(DISTINCT continent) AS Continents FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id WHERE pseudo=?");
        $stmt->bind_param("s",$pseudo);
        $stmt->execute();
        $rs=$stmt->get_result();
        $nbContinent = mysqli_fetch_assoc($rs);
        $mysqli->close();
        return $nbContinent['Continents'];
    }

    /* COMPTEUR PAYS VISITES PAR L'UTILISATEUR */
    public function compterPaysUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT COUNT(DISTINCT pays) AS Pays FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id WHERE pseudo=?");
        $stmt->bind_param("s",$pseudo);
        $stmt->execute();
        $rs=$stmt->get_result();
        $nbPays = mysqli_fetch_assoc($rs);
        $mysqli->close();
        return $nbPays['Pays'];
    }

}