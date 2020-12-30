<?php 

require_once("../metier/Voyage.php");
require_once("../metier/Utilisateur.php");
require_once("../metier/Etape.php");
require_once("../metier/Commentaire.php");

class VoyageMysqliDAO {

     /* CONNEXION */       
     public function connexion() {
        $mysqli= new mysqli('localhost','mylene','afpamy13','travelog');
        return $mysqli;
    }

    //ajout Voyage

    public function addVoyageDAO($titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');

        //modifier l'id user
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, titre, resume, date_debut, date_fin, continent, pays, ville, couverture, statut, likesEtape, vues, id, code_etape) values (null,?,?,?,?,?,?,?,?,'Y',0,0,6,2)");
        $stmt->bind_param("sssss",$titre, $resume, $datedebut, $datefin, $continent, $pays, $ville, $couverture);
        $stmt->execute();
        $mysqli->close();
    }

    public function addEtapeDAO($sousTitre, $description){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');

        $stmt=$mysqli->prepare("insert into etape (code_etape, sous_titre, description, media, likesEtape, code_comm) values (null,?,?,'[photo1.jpg]',0,null)");
        $stmt->bind_param("ss", $sousTitre, $description);
        $stmt->execute();
        $mysqli->close();
    }

    // suppression Voyage

    public function suppVoyageDAO(int $codeVoyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare('delete from voyages where code_voyage= ?');
        $stmt->bind_param("i",$codeVoyage);
        $stmt->execute();
        $mysqli->close();
    }

    //Modif Voyage 

    public function modifVoyageDAO($voyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
    
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
        $stmt=$mysqli->prepare('select * from voyages');
        $stmt->execute();
        $rs=$stmt->get_result();
        return $rs;
        $rs->free();
        $mysqli->close();
    }

    /* FILTRER LES VOYAGES PAR CONTINENT */        
    public function filtrerVoyagesParContinent(string $continent) : ?array {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select * from voyages where continent=?");
        $stmt->bind_param("s",$continent);
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $data;
    }

    /* FILTRER LES VOYAGES PAR PAYS */        
    public function filtrerVoyagesParPays(string $pays) : ?array {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select * from voyages where pays=?");
        $stmt->bind_param("s",$pays);
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $data;
    }

    /* FILTRER LES VOYAGES PAR PAYS */        
    public function filtrerVoyagesParVille(string $ville) : ?array {
        $mysqli=$this->connexion();
        $stmt = $mysqli->prepare("select * from voyages where ville=?");
        $stmt->bind_param("s",$ville);
        $stmt->execute();
        $rs = $stmt->get_result();
        $data = $rs->fetch_array(MYSQLI_ASSOC);
        $rs->free();
        $mysqli->close();
        return $data;
    }
}