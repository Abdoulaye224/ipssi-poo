<?php

namespace Ipssi\Evaluation;

class texte extends element
{
    private $height;

    private $width;


    public function __construct(float $height, float $width)
    {
        $this->height = $height;
        $this->width = $width;

    }

    public function getHeight(): float
    {
        return $this->height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }
    function getType():string
    {
        return "=========== TEXTE ==========";
    }

    public function toString(): String
    {
            $string = $this->getType() . PHP_EOL;;
            $string .= 'height : ' . $this->getHeight() . PHP_EOL;
            $string .= 'width : ' . $this->getWidth() . PHP_EOL;

                return $string;
       
    }
}