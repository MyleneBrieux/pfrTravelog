<?php

class Image {

    private $codeImage;
    private $image;


    public function __construct(int $codeImage, string $image){
        $this->codeImage=$codeImage;
        $this->image=$image;
    }

    // CodeImage

    public function getCodeImage():int{
        return $this->codeImage;
    }

    // Image

    public function getImage():string{
        return $this->image;
    }

    public function setImage(string $image):self{
        $this->image=$image;
        return $this;
    }

    public function __toString():string{
        return " [Code image]: " . $this->codeImage . " [Image]: " . $this->image;
    }
}