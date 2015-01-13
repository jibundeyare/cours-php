<?php
echo "avec parenthèses\n";

$valeur = (true || true);
var_dump($valeur);

$valeur = (true || false);
var_dump($valeur);

$valeur = (false || true);
var_dump($valeur);

$valeur = (false || false);
var_dump($valeur);

echo "\n";

echo "sans parenthèses\n";

$valeur = true || true;
var_dump($valeur);

$valeur = true || false;
var_dump($valeur);

$valeur = false || true;
var_dump($valeur);

$valeur = false || false;
var_dump($valeur);

