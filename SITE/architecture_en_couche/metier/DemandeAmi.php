<?php

class DemandeAmi {

    private $idAmi;
    private $accepte;


    public function __construct(int $idAmi, string $accepte){
        $this->idAmi=$idAmi;
        $this->accepte=$accepte;
    }


    public function getIdAmi():int{
        return $this->idAmi;
    }

    public function getAccepte():string{
        return $this->accepte;
    }

    public function setAccepte(string $accepte):self{
        $this->accepte=$accepte;
        return $this;
    }


    public function __toString():string{
        return "[Id ami]: " . $this->idAmi . " [Accepte]: " . $this->accepte ; 
    } 
    
}

?>