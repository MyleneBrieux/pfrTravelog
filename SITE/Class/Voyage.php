<?php

class Voyage {

    private $codeVoyage;
    private $title;
    private $description;
    private $datedebut;
    private $datefin;
    private $couverture;
    private $media;
    private $statut;
    private $paragraphe;


    public function __construct(int $codeVoyage, string $title, string $description, DateTime $datedebut, DateTime $datefin, string $couverture, 
                                string $media, string $statut, string $paragraphe){

        $this->codeVoyage=$codeVoyage;
        $this->title=$title;
        $this->description=$description;
        $this->datedebut=$datedebut;
        $this->datefin=$datefin;
        $this->couverture=$couverture;
        $this->media=$media;
        $this->statut=$statut;
        $this->paragraphe=$paragraphe;
    }

    // CodeVoyage

    public function getCodeVoyage():int{
        return $this->codeVoyage;
    }

    // Title

    public function getTitle():string{
        return $this->title;
    }

    public function setTitle(string $title):self{
        $this->title=$title;
        return $this;
    }

    // Desc

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription(string $description):self{
        $this->description=$description;
        return $this;
    }

    // DateDebut

    public function getDateDebut():DateTime{
        return $this->datedebut;
    }

    public function setDateDebut(DateTime $datedebut):self{
        $this->datedebut=$datedebut;
        return $this;
    }

    // DateFin

    public function getDateFin():DateTime{
        return $this->datefin;
    }

    public function setDateFin(DateTime $datefin):self{
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

    // Media

    public function getMedia():string{
        return $this->media;
    }

    public function setMedia(string $media):self{
        $this->media=$media;
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

    // Paragraphe

    public function getParagraphe():string{
        return $this->paragraphe;
    }

    public function setParagraphe(string $paragraphe):self{
        $this->paragraphe=$paragraphe;
        return $this;
    }


    // ToString

    public function __toString():string{
        return "[Code du Voyage]: " . $this->codeVoyage . " [Titre]: " . $this->title . " [Description]: " . $this->description . 
        "[Date de debut]: " . $this->datedebut . " [Date de fin]: " . $this->datefin . " [Couverture]: " . $this->couverture . 
        "[Media]: " . $this->media . " [Statut]: " . $this->statut . " [Paragraphe]: " . $this->paragraphe ;
    }

}

?>