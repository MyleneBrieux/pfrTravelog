<?php

class Notification {

    private $codeNotif;
    private $typeNotif;
    private $date;


    public function __construct(int $codeNotif, string $typeNotif, DateTime $date){
        $this->codeNotif=$codeNotif;
        $this->typeNotif=$typeNotif;
        $this->date=$date;
    }


    public function getCodeNotif():int{
        return $this->codeNotif;
    }

    public function getTypeNotif():string{
        return $this->typeNotif;
    }

    public function setTypeNotif(string $typeNotif):self{
        $this->typeNotif=$typeNotif;
        return $this;
    }

    public function getDate():DateTime{
        return $this->date;
    }

    public function setDate(DateTime $date):self{
        $this->date=$date;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . $this->codeNotif . " [Type]: " . $this->typeNotif . " [Date]: " . $this->date ;
    }

}

?>