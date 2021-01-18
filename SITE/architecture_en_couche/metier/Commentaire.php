<?php

include_once('Notification.php');

class Commentaire extends Notification {

    private $codeComm;
    private $commentaire;
    private $codeEtape;


    public function __construct(int $codeNotif, DateTime $date, int $codeComm, string $commentaire, int $codeEtape){
        parent::__construct($codeNotif,$date);
        $this->codeComm=$codeComm;
        $this->commentaire=$commentaire;
        $this->codeEtape=$codeEtape;
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

    public function getcodeEtape():int{
        return $this->codeEtape;
    }

    public function setcodeEtape(int $codeEtape):self{
        $this->codeEtape=$codeEtape;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du commentaire]: " . $this->codeComm . " [Commentaire]: " . $this->commentaire ;
    } 
    
}

?>