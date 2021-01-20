<?php 

// LIAISONS AVEC AUTRES COUCHES //
require_once("../metier/Voyage.php");
require_once("../metier/Utilisateur.php");
require_once("../metier/Etape.php");
require_once("../metier/Commentaire.php");

// GESTION DES ERREURS //
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include_once("dao_exception.php");

class VoyageMysqliDAO {

     /* CONNEXION */       
     public function connexion() {
        try {
            $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
            // $mysqli= new mysqli('localhost','root','','travelog');
            //$mysqli= new mysqli('localhost','romain_wyon','luna1004','travelog');
            return $mysqli;
        } catch (mysqli_sql_exception $a) {
            throw new DaoException($a->getMessage(), $a->getCode());
        }
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

    public function nbrVuesVoyageDAO($vues,$codeVoyage){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("update voyages set vues=? where code_voyage=?");
        $stmt->bind_param("ii", $vues, $codeVoyage);
        $stmt->execute();
        $rs=$stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
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

        $stmt=$mysqli->prepare("insert into etape (code_etape, sous_titre, description) values (null,?,?)");
        $stmt->bind_param("ss", $sousTitre, $description);
        $stmt->execute();
        $mysqli->close();
    }

    // Ajout comm
    public function addCommentaireDAO($commentaire, $id, $codeEtape){
        $mysqli=$this->connexion();

        $stmt=$mysqli->prepare("insert into commentaires (code_comm, commentaire, id,code_etape) values (null,?,?,?)");
        $stmt->bind_param("sii", $commentaire, $id, $codeEtape);
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

    // AFFICHER COMMENTAIRE
    public function afficherLesDetailsCommentaireDAO(int $codeEtape) {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from commentaires where code_etape=?');
        $stmt->bind_param("i",$codeEtape);
        $stmt->execute();
        $rs=$stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    public function nbrCommentaireDansUnVoyageDAO(int $codeEtape){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from commentaires where code_etape=?");
        $stmt->bind_param("i",$codeEtape);
        $stmt->execute();
        $rs=$stmt->get_result();
        $nbComm=mysqli_num_rows($rs);
        $mysqli->close();
        return $nbComm;
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

    //Modif Comm

    public function modifCommDAO(string $commentaire, int $codeComm){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("update commentaires set commentaire=? where code_comm= ?"); 
        $stmt->bind_param("si", $commentaire, $codeComm);
        $stmt->execute();
        $mysqli->close();
    }

    // Likes

    public function addLikesDAO(int $codeVoyage,int $id){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("insert into likes (id_like, code_voyage, id) values (null, ?,?)"); 
        $stmt->bind_param("ii", $codeVoyage, $id);
        $stmt->execute();
        $mysqli->close();
    }

    public function nbrLikesDAO($codeVoyage){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from likes where code_voyage=?");
        $stmt->bind_param("i", $codeVoyage);
        $stmt->execute();
        $rs=$stmt->get_result();
        $nbrLikes=mysqli_num_rows($rs);
        $mysqli->close();
        return $nbrLikes;
    }

    public function quiAddLikesDAO($id){
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare("select * from likes where id=?"); 
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $mysqli->close();
    }


    /* AFFICHER TOUS LES VOYAGES */        
    public function afficherVoyagesAccueil($start, $nbParPage) {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from voyages order by date_debut desc limit ?,?');
            $stmt->bind_param("ii",$start, $nbParPage);
            $stmt->execute();
            $rs=$stmt->get_result();
            return $rs;
            $rs->free();
            $mysqli->close();
        } catch (mysqli_sql_exception $q) {
            throw new DaoException($q->getMessage(), $q->getCode());
        }
    }

    /* COMPTER LE NOMBRE DE VOYAGES DANS LA BDD */
    public function compterVoyages() {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from voyages');
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=mysqli_num_rows($rs);
            $mysqli->close();
            return $data;
        } catch (mysqli_sql_exception $r) {
            throw new DaoException($r->getMessage(), $r->getCode());
        }
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

    /* RECHERCHE VOYAGE PAR PSEUDO */
    public function chercherVoyageParCodeEtape(int $codeEtape) {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select * from voyages where code_etape=?");
        $stmt->bind_param("i",$codeEtape);
        $stmt->execute();
        $voyage = $stmt->get_result();
        return $voyage;
        $voyage->free();
        $mysqli->close();
    }

    /* FILTRE : RECHERCHER LES CONTINENTS DE LA TABLE VOYAGES */
    public function filtrerContinents() {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from voyages where continent=?');
            $stmt->bind_param("s",$continent);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=$rs->fetch_all(MYSQLI_ASSOC);
            $mysqli->close();
            return $data;
        } catch (mysqli_sql_exception $u) {
            throw new DaoException($u->getMessage(), $u->getCode());
        }
    }

    /* FILTRE : RECHERCHER LES CONTINENTS DE LA TABLE VOYAGES */
    public function filtrerPays() {
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from voyages where pays=?');
            $stmt->bind_param("s",$pays);
            $stmt->execute();
            $rs=$stmt->get_result();
            $data=$rs->fetch_all(MYSQLI_ASSOC);
            $mysqli->close();
            return $data;
        } catch (mysqli_sql_exception $v) {
            throw new DaoException($v->getMessage(), $v->getCode());
        }
    }
        
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
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('select * from commentaires where code_comm=?');
            $stmt->bind_param("i",$codeComm);
            $stmt->execute();
            $rs=$stmt->get_result();
            $comm = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $comm;
        } catch (mysqli_sql_exception $y) {
            throw new DaoException($y->getMessage(), $y->getCode());
        }
    }

    /* SUPPRIMER UNE NOTIFICATION */
    public function supprimerNotification(int $codeNotif){
        try {
            $mysqli=$this->connexion();
            $stmt=$mysqli->prepare('delete from notifications where code_notif= ?');
            $stmt->bind_param("i",$codeNotif);
            $stmt->execute();
            $mysqli->close();
        } catch (mysqli_sql_exception $z) {
            throw new DaoException($z->getMessage(), $z->getCode());
        }
    }

    /* CHERCHER VOYAGE PAR CODE VOYAGE */
    public function chercherEtapeParCode(int $codeEtape) : ?array {
        try {
            $mysqli=$this->connexion();
            $stmt = $mysqli->prepare("select * from etape where code_etape=?");
            $stmt->bind_param("i",$codeEtape);
            $stmt->execute();
            $rs = $stmt->get_result();
            $voyage = $rs->fetch_array(MYSQLI_ASSOC);
            $rs->free();
            $mysqli->close();
            return $voyage;
        } catch (mysqli_sql_exception $aa) {
            throw new DaoException($aa->getMessage(), $aa->getCode());
        }
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