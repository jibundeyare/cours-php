<?php
echo "avec parenthèses\n";

$valeur = (true or true);
var_dump($valeur);

$valeur = (true or false);
var_dump($valeur);

$valeur = (false or true);
var_dump($valeur);

$valeur = (false or false);
var_dump($valeur);

echo "\n";

echo "sans parenthèses\n";

$valeur = true or true;
var_dump($valeur);

$valeur = true or false;
var_dump($valeur);

$valeur = false or true;
var_dump($valeur);

$valeur = false or false;
var_dump($valeur);

