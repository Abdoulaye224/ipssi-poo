<?php


namespace Ipssi\Evaluation;


interface IOeuvre
{
    public function numero(): int ;
    function emprunter(abonne $ab): void ;
    function reserver(abonne $ab): void;
    function retour(): void ;

}