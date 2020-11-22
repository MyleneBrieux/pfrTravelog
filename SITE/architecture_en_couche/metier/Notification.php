<?php

class Notification {

    private $codeNotif;
    private $type;
    private $date;


    public function __construct(int $codeNotif, string $type, DateTime $date){
        $this->codeNotif=$codeNotif;
        $this->type=$type;
        $this->date=$date;
    }


    public function getCodeNotif():int{
        return $this->codeNotif;
    }

    public function getType():string{
        return $this->type;
    }

    public function setType(string $type):self{
        $this->type=$type;
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
        return "[Code de la notification]: " . $this->codeNotif . " [Type]: " . $this->type ;
    }

}

?>