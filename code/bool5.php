<?php
echo "avec parenthèses\n";

$valeur = (true and true);
var_dump($valeur);

$valeur = (true and false);
var_dump($valeur);

$valeur = (false and true);
var_dump($valeur);

$valeur = (false and false);
var_dump($valeur);

echo "\n";

echo "sans parenthèses\n";

$valeur = true and true;
var_dump($valeur);

$valeur = true and false;
var_dump($valeur);

$valeur = false and true;
var_dump($valeur);

$valeur = false and false;
var_dump($valeur);

