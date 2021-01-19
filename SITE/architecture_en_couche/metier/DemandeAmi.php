<?php

class DemandeAmi {

    private $codeAmi;
    private $idAmi;
    private $id;
    private $accepte;


    public function __construct(int $codeAmi, int $idAmi, int $id, string $accepte){
        $this->codeAmi=$codeAmi;
        $this->idAmi=$idAmi;
        $this->id=$id;
        $this->accepte=$accepte;
    }


    public function getCodeAmi():int{
        return $this->codeAmi;
    }

    public function getIdAmi():int{
        return $this->idAmi;
    }

    public function setIdAmi(int $idAmi):self{
        $this->idAmi=$idAmi;
        return $this;
    }

    public function getId():int{
        return $this->id;
    }

    public function setId(int $id):self{
        $this->id=$id;
        return $this;
    }

    public function getAccepte():string{
        return $this->accepte;
    }

    public function setAccepte(string $accepte):self{
        $this->accepte=$accepte;
        return $this;
    }


    public function __toString():string{
        return "[Code ami]: " . $this->codeAmi . " [Id ami]: " . $this->idAmi . "[Id]: " . $this->id . " [Accepte]: " . $this->accepte ; 
    } 
    
}

?>