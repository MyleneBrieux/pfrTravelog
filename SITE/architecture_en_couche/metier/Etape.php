<?php

include_once("Voyage.php");

class Etape extends Voyage {

    private $codeEtape;
    private $sousTitre;
    private $description;


    public function __construct(int $codeVoyage, string $titre, string $resume, string $datedebut, string $datefin, string $continent, 
                                string $pays, string $ville, string $couverture, string $statut, int $likes, int $vues, int $codeEtape, 
                                string $sousTitre, string $description){
        parent::__construct($codeVoyage,$titre,$resume,$datedebut,$datefin, $continent, $pays, $ville,$couverture,$statut,$likes,$vues);
        $this->codeEtape=$codeEtape;
        $this->sousTitre=$sousTitre;
        $this->description=$description;
    }

    // CodeEtape

    public function getCodeEtape():int{
        return $this->codeEtape;
    }

    // Sous-titre

    public function getSousTitre():string{
        return $this->sousTitre;
    }

    public function setSousTitre(string $sousTitre):self{
        $this->sousTitre=$sousTitre;
        return $this;
    }

    // Description

    public function getDescription():string{
        return $this->description;
    }

    public function setDescription(string $description):self{
        $this->description=$description;
        return $this;
    }


    // ToString

    public function __toString():string{
        return "[Code du Voyage]: " . parent::__toString() . " [Titre]: " . parent::__toString() . " [Résumé]: " . parent::__toString() . 
        "[Date de debut]: " . parent::__toString() . " [Date de fin]: " . parent::__toString() . " [Continent]: " . parent::__toString() . 
        " [Pays]: " . parent::__toString() . " [Ville]: " . parent::__toString() . " [Couverture]: " . parent::__toString() . 
        " [Statut]: " . parent::__toString() . " [Likes]: " . parent::__toString() . " [Vues] : " . parent::__toString() . 
        " [Code étape]: " . $this->codeEtape . " [Sous-titre]: " . $this->sousTitre . " [Description]: " . $this->description;
    }

}

?>