<?php 

require_once("../metier/Voyage.php");
require_once("../metier/Utilisateur.php");
require_once("../metier/Etape.php");
require_once("../metier/Commentaire.php");

class VoyageMysqliDAO {

    //ajout Voyage

    public function addVoyageDAO($titre, $resume, $datedebut, $datefin, $couverture){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');

        //modifier l'id user
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, titre, resume, date_debut, date_fin, couverture, statut, likes, vues, id, code_etape) values (null,?,?,?,?,?,'Y',0,0,6,2)");
        $stmt->bind_param("sssss",$titre, $resume, $datedebut, $datefin, $couverture);
        $stmt->execute();
        $mysqli->close();
    }

    public function addEtapeDAO($sousTitre, $description){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');

        $stmt=$mysqli->prepare("insert into etape (code_etape, sous_titre, description, media, likes, code_comm) values (null,?,?,'[photo1.jpg]',0,null)");
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
    
        $stmt=$mysqli->prepare("update voyages set date_debut=?, date_fin=?, couverture=?, statut=? where code_voyage= ?"); 
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $couverture=$voyage->getCouverture();
        $statut=$voyage->getStatut();
        $codeVoyage=$voyage->getCodeVoyage();
        
        $stmt->bind_param("ssssssi", $date_debut, $date_fin, $couverture, $statut, $codeVoyage);
        $stmt->execute();
        $mysqli->close();
    
    }
}