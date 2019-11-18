<?php

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');


class document
{

    private $name;

    private $color;

    private $positionX;

    private $positionY;

    private $element;


    public function __construct(string  $name, RGB $color, int $positionX, int $positionY)
    {
       $this->name = $name;
        $this->color = $color;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
        $this->element = [];

    }

    public function getElement(): array
    {
        return $this->element;
    }

    public function getName (): string
    {
        return $this->name;
    }
    public function getColor(): RGB
    {
        return $this->color;
    }
    
    public function getPositionX (): int
    {
        return $this->positionX;
    }

    public function getPositionY (): int
    {
        return $this->positionY;
    }



    public function toString(): String
    {

        $String = '===========' . $this->getName() . '=========' . PHP_EOL;
    $String .= $this->getColor()->toString() . PHP_EOL;
    $String .="Position X : " . $this->getPositionX() . PHP_EOL;
    $String .="position Y : " . $this->getPositionY() . PHP_EOL;

    foreach ($this->element as $el){
        $String .= $el->toString();
    }
        return $String;

    }

    public function ajoutElement($forme)
    {
        if ($forme instanceof element) {
            array_push($this->element, $forme);
        }
    }
}