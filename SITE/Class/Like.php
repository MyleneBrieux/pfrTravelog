<?php

include_once("Notification.php");

class Like extends Notification {

    private $codeLike;
    private $nombreVu;


    public function __construct(int $codeNotif, string $type, DateTime $date, int $codeLike, int $nombreVu){
        parent::__construct($codeNotif,$type,$date);
        $this->codeLike=$codeLike;
        $this->nombreVu=$nombreVu;
    }


    public function getCodeLike():int{
        return $this->codeLike;
    }

    public function getNombreVu():int{
        return $this->nombreVu;
    }

    public function setNombreVu(int $nombreVu):self{
        $this->nombreVu=$nombreVu;
        return $this;
    }


    public function __toString():string{
        return "[Code de la notification]: " . parent::__toString() . " [Type]: " . parent::__toString() . " [Date]: " . parent::__toString() . 
               " [Code du like]: " . $this->codeLike . " [Nombre de vues]: " . $this->nombreVu ;
    } 
    
}

?>