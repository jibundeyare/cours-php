<?php
// algèbre booléen avec parenthèse

echo "avec parenthèses\n";

// vrai ou vrai, équivaut à vrai
$valeur = (true || true);
var_dump($valeur);

// vrai ou faux, équivaut à vrai
$valeur = (true || false);
var_dump($valeur);

// faux ou vrai, équivaut à vrai
$valeur = (false || true);
var_dump($valeur);

// faux ou faux, équivaut à faux
$valeur = (false || false);
var_dump($valeur);

echo "\n";

// algèbre booléen sans parenthèse

echo "sans parenthèses\n";

// vrai ou vrai, équivaut à vrai
$valeur = true || true;
var_dump($valeur);

// vrai ou vrai, équivaut à vrai
$valeur = true || false;
var_dump($valeur);

// vrai ou vrai, équivaut à vrai
$valeur = false || true;
var_dump($valeur);

// faux ou faux, équivaut à faux
$valeur = false || false;
var_dump($valeur);

