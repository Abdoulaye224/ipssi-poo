<?php

use \Ipssi\Evaluation\NotExistIndexException;
use \Ipssi\Evaluation\NotNumericException;

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

/***
 * Une fonction diviseur qui prend
 *
 * 
 */
class Diviseur {

    public function division($index, $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

        if($index > count($valeurs)) 
        {
           throw new NotExistIndexException();
        }
        elseif ((is_numeric($index) === false) || (is_numeric($diviseur) === false))
        {
            throw new NotNumericException();
        }
        else 
        {
            return $valeurs[$index] / $diviseur;
        }
    }
}


do {

try {
    $error = false;
    $input = $climate->input("Entrez l’indice de l’entier à diviser : ");
    $index = $input->prompt();

    $input = $climate->input("Entrez le diviseur : ");
    $diviseur = $input->prompt();

    $climate->output("Le résultat de la division est : " . (new Diviseur())->division($index, $diviseur));
} catch(NotExistIndexException $e){
    $error = true;
    echo 'ERROR: ' . $e->getMessage();
        echo PHP_EOL;
} catch (NotNumericException $e){
    $error = true;
    echo 'ERROR: ' . $e->getMessage();
        echo PHP_EOL;
}
} while($error == true);


