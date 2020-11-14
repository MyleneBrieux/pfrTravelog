<?php

class Langues {
    private $codeLang;
    private $typeLang;

    public function __construct(int $codeLang, string $typeLang)
    {
        $this->codeLang = $codeLang;
        $this->typeLang = $typeLang;
    }

    /**
     * Get the value of codeLang
     */ 
    public function getCodeLang() : int
    {
        return $this->codeLang;
    }

    /**
     * Get the value of typeLang
     */ 
    public function getTypeLang() : string
    {
        return $this->typeLang;
    }

    /**
     * Set the value of typeLang
     *
     * @return  self
     */ 
    public function setTypeLang(string $typeLang) : self
    {
        $this->typeLang = $typeLang;

        return $this;
    }

    public function __toString()
    {
        return "[CodeLang] : " . $this->codeLang . "[TypeLang] : " . $this->typeLang;
    }
}

?>