<?php

class Notification {

    private $codeNotif;
    private $date;


    public function __construct(int $codeNotif, DateTime $date){
        $this->codeNotif=$codeNotif;
        $this->date=$date;
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


    public function __toString():string{
        return "[Code de la notification]: " . $this->codeNotif . " [Date]: " . $this->date ;
    }

}

?>