<?php

class Vu {

    private $codeVu;
    private $nombreVu;


    public function __construct(int $codeVu, int $nombreVu){
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
        return " [Code du like]: " . $this->codeLike . " [Nombre de vues]: " . $this->nombreVu ;
    } 
    
}

?>