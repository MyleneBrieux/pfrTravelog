<?php 

require_once("../metier/Voyage.php");
require_once("../metier/Etape.php");

class VoyageMysqliDAO {

    //ajout Voyages

    public function addVoyagesDAO($voyage){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare("insert into voyages (code_voyage, titre, resume, date_debut, date_fin, couverture, statut, likes, vues) values (null,?,?,?,?,?,?,0,0)");
        // $codeVoyage=$voyage->getCodeVoyage();
        $titre=$voyage->getTitre();
        $resume=$voyage->getResume();
        $date_debut=$voyage->getDateDebut();
        $date_fin=$voyage->getDateFin();
        $couverture=$voyage->getCouverture();
        $statut=$voyage->getStatut();
        // $likes=$voyage->getLikes();
        // $vues=$voyage->getVues();
        $stmt->bind_param("ssssss", $titre, $resume, $date_debut, $date_fin, $couverture, $statut);
        $stmt->execute();
        $mysqli->close();
    }

    //ajout Etape

    public function addEtapeDAO($etape){
        $mysqli= new mysqli('localhost','romain_wyon','luna1004','pfrtravelog');
        
        $stmt=$mysqli->prepare("insert into etape (code_etape, sous-titre, description, media, likes, code_comm) values (null,?,?,?,0,null)");
        // $codeEtape=$voyage->getCodeEtape();
        $sousTitre=$voyage->getSousTitre();
        $description=$voyage->getDescription();
        $media=$voyage->getMedia();
        // $likesEtape=$voyage->getLikesEtape();
        $stmt->bind_param("sss", $sousTitre, $description, $media);
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