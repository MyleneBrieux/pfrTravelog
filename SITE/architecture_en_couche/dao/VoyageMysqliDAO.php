<?php 

require_once("../metier/Voyage.php");

class VoyageMysqliDAO {

    //ajout Voyage

    public function addVoyageDAO($voyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare("insert into voyages (titre, resume, date_debut, date_fin, couverture, statut, likes, vues) values (?,?,?,?,?,?,?,?)");
        $titre=$voyage->getTitre();
        $resume=$voyage->getResume();
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $couverture=$voyage->getCouverture();
        $statut=$voyage->getStatut();
        $likes=$voyage->getLikes();
        $vues=$voyage->getVues();
        $stmt->bind_param("ssssssii", $titre, $resume, $date_debut, $date_fin, $couverture, $statut, $likes, $vues);
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