<?php
// algèbre booléen avec parenthèse

echo "avec parenthèses\n";

// vrai et vrai, équivaut à vrai
$valeur = (true && true);
var_dump($valeur);

// vrai et faux, équivaut à faux
$valeur = (true && false);
var_dump($valeur);

// faux et vrai, équivaut à faux
$valeur = (false && true);
var_dump($valeur);

// faux et faux, équivaut à faux
$valeur = (false && false);
var_dump($valeur);

echo "\n";

// algèbre booléen sans parenthèse

echo "sans parenthèses\n";

// vrai et vrai, équivaut à vrai
$valeur = true && true;
var_dump($valeur);

// faux et faux, équivaut à faux
$valeur = true && false;
var_dump($valeur);

// faux et faux, équivaut à faux
$valeur = false && true;
var_dump($valeur);

// faux et faux, équivaut à faux
$valeur = false && false;
var_dump($valeur);

