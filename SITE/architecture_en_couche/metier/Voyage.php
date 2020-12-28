<?php

class Voyage {

    private $codeVoyage;
    private $titre;
    private $resume;
    private $datedebut;
    private $datefin;
    private $couverture;
    private $statut;
    private $likes;
    private $vues;


    public function __construct(int $codeVoyage, string $titre, string $resume, string $datedebut, string $datefin, string $couverture, 
                                string $statut, int $likes, int $vues){

        $this->codeVoyage=$codeVoyage;
        $this->titre=$titre;
        $this->resume=$resume;
        $this->datedebut=$datedebut;
        $this->datefin=$datefin;
        $this->couverture=$couverture;
        $this->statut=$statut;
        $this->likes=$likes;
        $this->vues=$vues;
    }

    // CodeVoyage

    public function getCodeVoyage():int{
        return $this->codeVoyage;
    }

    // Titre

    public function getTitre():string{
        return $this->titre;
    }

    public function setTitre(string $titre):self{
        $this->titre=$titre;
        return $this;
    }

    // Desc

    public function getResume():string{
        return $this->resume;
    }

    public function setResume(string $resume):self{
        $this->resume=$resume;
        return $this;
    }

    // DateDebut

    public function getDateDebut():string{
        return $this->datedebut;
    }

    public function setDateDebut(string $datedebut):self{
        $this->datedebut=$datedebut;
        return $this;
    }

    // DateFin

    public function getDateFin():string{
        return $this->datefin;
    }

    public function setDateFin(string $datefin):self{
        $this->datefin=$datefin;
        return $this;
    }

    // Couverture

    public function getCouverture():string{
        return $this->couverture;
    }

    public function setCouverture(string $couverture):self{
        $this->couverture=$couverture;
        return $this;
    }

    // Statut

    public function getStatut():string{
        return $this->statut;
    }

    public function setStatut(string $statut):self{
        $this->statut=$statut;
        return $this;
    }

    // Likes

    public function getLikes():int{
        return $this->likes;
    }

    public function setLikes(int $likes):self{
        $this->likes=$likes;
        return $this;
    }

    // Vues

    public function getVues():int{
        return $this->vues;
    }
    
    public function setVues(int $vues):self{
        $this->vues=$vues;
        return $this;
    }




    // ToString

    public function __toString():string{
        return "[Code du Voyage]: " . $this->codeVoyage . " [Titre]: " . $this->titre . " [Résumé]: " . $this->resume . 
        "[Date de debut]: " . $this->datedebut . " [Date de fin]: " . $this->datefin . " [Couverture]: " . $this->couverture . 
       " [Statut]: " . $this->statut . " [Likes]: " . $this->likes . " [Vues] : " . $this->vues ;
    }

}

?>