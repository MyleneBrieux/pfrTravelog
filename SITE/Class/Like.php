<?php

include_once('Notification.php');

class Like extends Notification {

    private $codeLike;
    private $nombreLike;


    public function __construct(int $codeNotif, string $type, DateTime $date, int $codeLike, int $nombreLike){
        parent::__construct($codeNotif,$type,$date);
        $this->codeLike=$codeLike;
        $this->nombreLike=$nombreLike;
    }


    public function getCodeLike():int{
        return $this->codeLike;
    }

    public function getNombreLike():int{
        return $this->nombreLike;
    }

    public function setNombreLike(int $nombreLike):self{
        $this->nombreLike=$nombreLike;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Type]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du like]: " . $this->codeLike . " [Nombre de vues]: " . $this->nombreLike ;
    } 
    
}

?>