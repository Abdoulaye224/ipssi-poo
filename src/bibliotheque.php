<?php

namespace Ipssi\Evaluation;

class bibliotheque {

    private $abonnes;

    private $livres;

    /**
     * bibliotheque constructor.
     * @param $abonnes
     * @param $livres
     */
    public function __construct()
    {
        $this->abonnes = [abonne];
        $this->livres = [oeuvre];
    }

    public function ajouterAbonne(abonne $ab): void
    {
        array_push($this->abonnes, $ab);
    }

    public function ajouterDocument(document $d): void
    {
        array_push($this->livres, $d);
    }

    public function abonneExistant (int $num): boolean
    {
        foreach ($this->abonnes as $ab){
            if ($ab->getNumero() === $num)
            return true;
        }
        return false;
    }

    public function livreExistant (int $num): boolean
    {
        foreach ($this->livres as $li) {
            if ($li->getNumero() === $num)
                return true;
        }
        return false;
    }
}