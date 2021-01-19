<?php

class Notification {

    private $codeNotif;
    private $date;
    private $id;
    private $codeVoyage;
    private $codeComm;


    public function __construct(int $codeNotif, DateTime $date){
        $this->codeNotif=$codeNotif;
        $this->date=$date;
        $this->id=$id;
        $this->codeVoyage=$codeVoyage;
        $this->codeComm=$codeComm;
    }


    public function getCodeNotif():int{
        return $this->codeNotif;
    }

    public function getDate():DateTime{
        return $this->date;
    }

    public function setDate(DateTime $date):self{
        $this->date=$date;
        return $this;
    }

    public function getId():int{
        return $this->id;
    }

    public function setId(int $id):self{
        $this->id=$id;
        return $this;
    }

    public function getCodeVoyage():int{
        return $this->codeVoyage;
    }

    public function setCodeVoyage(int $codeVoyage):self{
        $this->codeVoyage=$codeVoyage;
        return $this;
    }

    public function getCodeComm():int{
        return $this->codeComm;
    }

    public function setCodeComm(int $codeComm):self{
        $this->codeComm=$codeComm;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . $this->codeNotif . " [Date]: " . $this->date . " [Id]: " . $this->id
        . " [Code voyage]: " . $this->codeVoyage . " [Code commentaire]: " . $this->codeComm ;
    }

}

?>