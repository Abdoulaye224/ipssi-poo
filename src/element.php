<?php

namespace Ipssi\Evaluation;

class element 
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
    

}