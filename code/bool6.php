<?php
// algèbre booléen avec parenthèse

echo "avec parenthèses\n";

// vrai ou vrai, équivaut à vrai
$valeur = (true or true);
var_dump($valeur);

// vrai ou vrai, équivaut à vrai
$valeur = (true or false);
var_dump($valeur);

// vrai ou vrai, équivaut à vrai
$valeur = (false or true);
var_dump($valeur);

// faux ou faux, équivaut à faux
$valeur = (false or false);
var_dump($valeur);

echo "\n";

// algèbre booléen sans parenthèse

echo "sans parenthèses\n";

// sans parenthèses, seul le premier `true` est évalué
$valeur = true or true;
var_dump($valeur);

// sans parenthèses, seul le premier `true` est évalué
$valeur = true or false;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false or true;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false or false;
var_dump($valeur);

