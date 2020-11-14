<?php

include_once("Voyage.php");

class Vu extends Voyage {

    private $codeVu;
    private $nombreVu;


    public function __construct(int $codeVoyage, string $title, string $desc, DateTime $datedebut, DateTime $datefin, string $couverture, 
    string $media, string $statut, string $paragraphe, int $codeVu, int $nombreVu){
        parent::__construct($codeVoyage, $title, $desc, $datedebut, $datefin, $couverture,$media, $statut, $paragraphe);
        $this->codeVu=$codeVu;
        $this->nombreVu=$nombreVu;
    }

    // CodeVu

    public function getCodeVu():int{
        return $this->codeVu;
    }

    // NombreVu

    public function getNombreVu():int{
        return $this->nombreVu;
    }

    public function setNombreVu(int $nombreVu):self{
        $this->nombreVu=$nombreVu;
        return $this;
    }


    // ToString
    
    public function __toString():string{
        return parent::__toString() . " [Code du like]: " . $this->codeLike . " [Nombre de vues]: " . $this->nombreVu ;
    } 
    
    // public function __toString():string{
    // return "[Code du Voyage]: " . $this->codeVoyage . " [Titre]: " . $this->title . " [Description]: " . $this->desc . 
    //     "[Date de debut]: " . $this->datedebut . " [Date de fin]: " . $this->datefin . " [Couverture]: " . $this->couverture . 
    //     "[Media]: " . $this->media . " [Statut]: " . $this->statut . " [Paragraphe]: " . $this->paragraphe . 
    //     " [Code du like]: " . $this->codeLike . " [Nombre de vues]: " . $this->nombreVu ;
    // }
}

?>