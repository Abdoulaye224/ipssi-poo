<?php

namespace Ipssi\Evaluation;

class abonne {

    private $numeroAuto = 0;

    private $numero;

    private $estInterditEmprunt;

    private $dateFinInterdit;



    /**
     * abonne constructor.
     * @param int $numeroAuto
     * @param $numero
     * @param $estInterditEmprunt
     * @param $dateFinInterdit
     */
    public function __construct(int $numeroAuto, $numero, $estInterditEmprunt)
    {
        $this->numeroAuto = $numero++;
        $this->dateFinInterdit = false;
    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero): void
    {
        $this->numero = $numero;
    }

    public function estInterditEmprunt(): void
    {
        return $this->estInterditEmprunt;
    }

    public function leverInterdiction(): void
{
    $this->estInterditEmprunt = false;

}


}