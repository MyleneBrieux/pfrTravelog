<?php

class Signalement {

    private $codeSignal;


    public function __construct(int $codeSignal){
        $this->codeSignal=$codeSignal;
    }


    public function getCodeSignal():int{
        return $this->codeSignal;
    }


    public function __toString():string{
        return " [Code du signalement]: " . $this->codeSignal ;
    } 
    
}

?>