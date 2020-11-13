<?php

include_once("Notification.php");

class Commentaire extends Notification {

    private $codeComm;
    private $nombreComm;


    public function __construct(int $codeNotif, string $type, DateTime $date, int $codeComm, int $nombreComm){
        parent::__construct($codeNotif,$type,$date);
        $this->codeComm=$codeComm;
        $this->nombreComm=$nombreComm;
    }


    public function getCodeComm():int{
        return $this->codeComm;
    }

    public function getNombreComm():int{
        return $this->nombreComm;
    }

    public function setNombreComm(int $nombreComm):self{
        $this->nombreComm=$nombreComm;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Type]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du commentaire]: " . $this->codeComm . " [Nombre]: " . $this->nombreComm ;
    } 
    
}

?>