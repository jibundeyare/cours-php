<?php
// exemples de concaténation
// on peut utiliser indifférement les simples quotes `'` et les doubles quotes `"`

$morceau1 = "une démonstration";
$morceau2 = 'de concaténation';

$texte = $morceau1 . ' ' . $morceau2;
echo $texte . PHP_EOL;

$texte = $morceau1 . " " . $morceau2;
echo $texte . PHP_EOL;

