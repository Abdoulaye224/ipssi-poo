<?php

namespace Ipssi\Evaluation;

class RGB 
{
    private $R;

    private $G;

    private $B;

    public function __construct(int $R, int $G, int $B)
    {
        $this->R = $R;
        $this->G = $G;
        $this->B = $B;
    }

    public function getR(): int
    {
        return $this->R;
    }
    public function getG(): int
    {
        return $this->G;
    }
    public function getB(): int
    {
        return $this->B;
    }

    public function toString(): String
    {
            $string = 'R : ' . $this->getR() . PHP_EOL;
            $string .= 'G : ' . $this->getG() . PHP_EOL;
            $string .= 'B : ' . $this->getB() . PHP_EOL;

                return $string;
       
    }
}