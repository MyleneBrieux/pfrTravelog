<?php 

require_once("../metier/Voyage.php");

class VoyageMysqliDAO {

    //ajout Voyages

    public function addVoyagesDAO($voyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, title, resume, date_debut, date_fin, couverture, statut, likes, vues) values (null,?,?,?,?,?,?,0,0)");
        // $codeVoyage=$voyage->getCodeVoyage();
        $title=$voyage->getTitle();
        $resume=$voyage->getResume();
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $couverture=$voyage->getCouverture();
        $statut=$voyage->getStatut();
        // $likes=$voyage->getLikes();
        // $vues=$voyage->getVues();
        $stmt->bind_param("ssssss", $title, $resume, $date_debut, $date_fin, $couverture, $statut);
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