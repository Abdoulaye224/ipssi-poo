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


    public function __construct(element $element, RGB $color, int $positionX, int $positionY)
    {
        $this->element = $element;
        $this->color = $color;
        $this->positionX = $positionX;
        $this->positionY = $positionY;
    }

    public function getElement(): element
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

    public function addElement(): array
    {

    }

    public function toString(): String
    {
    
    $String = $this->getElement()->toString() . PHP_EOL;
    $String .= $this->getColor()->toString() . PHP_EOL;
    $String .="Position X : " . $this->getPositionX() . PHP_EOL;
    $String .="position Y : " . $this->getPositionY() . PHP_EOL;

        return $String;

    }


    }