<?php
use \Ipssi\Evaluation\document;
use \Ipssi\Evaluation\RGB;

namespace Ipssi\Evaluation;

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Useless;  

new Useless();


$doc = [ 
new document(new texte(27, 27), new RGB(255, 0, 0), 23, 23),
 new document(new image(23, 267), new RGB(255, 0, 0), 23, 23),
 new document(new texte(23.2, 7), new RGB(255, 0, 0), 23, 23),
 new document(new image(23, 267), new RGB(255, 0, 0), 23, 23),
];

foreach ($doc as $doc) {
echo $doc->toString();
}

