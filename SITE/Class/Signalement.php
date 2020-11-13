<?php

include_once("Commentaire.php");

class Signalement extends Commentaire {

    private $codeSignal;


    public function __construct(int $codeNotif, string $type, DateTime $date, int $codeComm, int $nombreComm, int $codeSignal){
        parent::__construct($codeNotif,$type,$date,$codeComm,$nombreComm);
        $this->codeSignal=$codeSignal;
    }


    public function getCodeSignal():int{
        return $this->codeSignal;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Type]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du commentaire]: " . parent::__toString() . " [Nombre]: " . parent::__toString() . 
               " [Code du signalement]: " . $this->codeSignal ;
    } 
    
}

?>