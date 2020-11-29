<?php 

require_once("../metier/Voyage.php");

class VoyageMysqliDAO {

    //ajout Voyage

    public function addVoyageDAO($voyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare("insert into voyages (title, description, date_debut, date_fin, couverture, media, statut, paragraphe) values (?,?,?,?,?,?,?,?)");
        $title=$voyage->getTitle();
        $description=$voyage->getDescription();
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $couverture=$voyage->getCouverture();
        $media=$voyage->getMedia();
        $statut=$voyage->getStatut();
        $paragraphe=$voyage->getParagraphe();
        $stmt->bind_param("ssssssss", $title, $description, $date_debut, $date_fin, $couverture, $media, $statut, $paragraphe);
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
    
        $stmt=$mysqli->prepare("update voyages set date_debut=?, date_fin=?, media=?, statut=?, paragraphe=? where code_voyage= ?"); 
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $media=$voyage->getMedia();
        $statut=$voyage->getStatut();
        $paragraphe=$voyage->getParagraphe();
        $codeVoyage=$voyage->getCodeVoyage();
        
        $stmt->bind_param("ssssssi", $date_debut, $date_fin, $couverture, $media, $statut, $paragraphe, $codeVoyage);
        $stmt->execute();
        $mysqli->close();
    
    }
}