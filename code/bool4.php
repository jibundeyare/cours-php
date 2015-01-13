<?php
echo "avec parenthèses\n";

$valeur = (true xor true);
var_dump($valeur);

$valeur = (true xor false);
var_dump($valeur);

$valeur = (false xor true);
var_dump($valeur);

$valeur = (false xor false);
var_dump($valeur);

echo "\n";

echo "sans parenthèses\n";

$valeur = true xor true;
var_dump($valeur);

$valeur = true xor false;
var_dump($valeur);

$valeur = false xor true;
var_dump($valeur);

$valeur = false xor false;
var_dump($valeur);

