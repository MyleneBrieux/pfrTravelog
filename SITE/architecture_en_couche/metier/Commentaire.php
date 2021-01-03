<?php

include_once('Notification.php');

class Commentaire extends Notification {

    private $codeComm;
    private $commentaire;


    public function __construct(int $codeNotif, DateTime $date, int $codeComm, string $commentaire){
        parent::__construct($codeNotif,$date);
        $this->codeComm=$codeComm;
        $this->commentaire=$commentaire;
    }


    public function getCodeComm():int{
        return $this->codeComm;
    }

    public function getCommentaire():string{
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire):self{
        $this->commentaire=$commentaire;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du commentaire]: " . $this->codeComm . " [Commentaire]: " . $this->commentaire ;
    } 
    
}

?>