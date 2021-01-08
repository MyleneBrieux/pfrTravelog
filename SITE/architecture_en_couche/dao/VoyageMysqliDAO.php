<?php 

require_once("../metier/Voyage.php");
require_once("../metier/Utilisateur.php");
require_once("../metier/Etape.php");
require_once("../metier/Commentaire.php");

class VoyageMysqliDAO {

     /* CONNEXION */       
     public function connexion() {
        $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
        //$mysqli= new mysqli('localhost','romain_wyon','luna1004','travelog');
        return $mysqli;
    }

    //ajout Voyage

    public function addVoyageDAO($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $id/*, $codeEtape*/){
        $mysqli=$this->connexion();

        //modifier l'id user
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, titre, resume, date_debut, date_fin, continent, pays, ville, couverture, statut, likes, vues, id, code_etape) 
                                values (null,?,?,?,?,?,?,?,?,'Y',0,0,?,1)");
        $stmt->bind_param("ssssssssi",$titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture, $id/*, $codeEtape*/);
        $stmt->execute();
        $mysqli->close();
    }

    // Ajout Etape
    public function addEtapeDAO($sousTitre, $description){
        $mysqli=$this->connexion();

        $stmt=$mysqli->prepare("insert into etape (code_etape, sous_titre, description, media, likesEtape, code_comm) values (null,?,?,'[photo1.jpg]',0,null)");
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

    public function modifVoyageDAO($voyage){
        $mysqli=$this->connexion();
    
        $stmt=$mysqli->prepare("update voyages set date_debut=?, date_fin=?, continent=?, pays=?, ville=?, couverture=?, statut=? where code_voyage= ?"); 
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $continent=$voyage->getContinent();
        $pays=$voyage->getPays();
        $ville=$voyage->getVille();
        $couverture=$voyage->getCouverture();
        $statut=$voyage->getStatut();
        $codeVoyage=$voyage->getCodeVoyage();
        
        $stmt->bind_param("sssssssssi", $date_debut, $date_fin, $continent, $pays, $ville, $couverture, $statut, $codeVoyage);
        $stmt->execute();
        $mysqli->close();
    }


    /* AFFICHER TOUS LES VOYAGES */        
    public function afficherVoyages() {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select * from voyages order by date_debut asc');
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
    public function chercherVoyagesParPseudo(string $pseudo) {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select code_voyage, titre, resume, date_debut, date_fin, continent, pays, ville,
        couverture, statut, likes, vues, voyages.id, code_etape from voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=?");
        $stmt->bind_param("s",$pseudo);
        $stmt->execute();
        $rs = $stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    /* RECHERCHER LES CONTINENTS DE LA TABLE VOYAGES */
    public function chercherContinents() {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select continent from voyages');
        $stmt->execute();
        $continents=$stmt->get_result();
        return $continents;
        $continent->free();
        $mysqli->close();
    }

    /* RECHERCHER LES PAYS DE LA TABLE VOYAGES */
    public function chercherPays() {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select pays from voyages');
        $stmt->execute();
        $pays=$stmt->get_result();
        return $pays;
        $pays->free();
        $mysqli->close();
    }

    /* RECHERCHER LES VILLES DE LA TABLE VOYAGES */
    public function chercherVilles() {
        $mysqli=$this->connexion();
        $stmt=$mysqli->prepare('select ville from voyages');
        $stmt->execute();
        $villes=$stmt->get_result();
        return $villes;
        $ville->free();
        $mysqli->close();
    }

    /* RECHERCHE VOYAGE LE + RÉCENT */
    public function VoyagePlusRecentUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT * FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=? ORDER BY code_voyage DESC LIMIT 1");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $rs = $stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    /* RECHERCHE VOYAGE LE + POPULAIRE */
    public function VoyagePlusPopulaireUtilisateur(string $pseudo){
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("SELECT * FROM voyages inner join utilisateurs on voyages.id=utilisateurs.id where pseudo=? ORDER BY likes AND vues DESC LIMIT 1");
        $stmt->bind_param("s", $pseudo);
        $stmt->execute();
        $rs = $stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }
}