<?php
use \Ipssi\Evaluation\document;
use \Ipssi\Evaluation\RGB;

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Useless;  

new Useless();



$doc = new document('Doc1', new RGB(255, 0, 0), 23, 23);

$doc->ajoutElement(new image(12,12));
$doc->ajoutElement(new texte(23,12));

echo $doc->toString();


