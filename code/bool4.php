<?php
// algèbre booléen avec parenthèse

echo "avec parenthèses\n";

// vrai ou exclusif vrai, équivaut à faux
$valeur = (true xor true);
var_dump($valeur);

// vrai ou exclusif faux, équivaut à vrai
$valeur = (true xor false);
var_dump($valeur);

// faux ou exclusif vrai, équivaut à vrai
$valeur = (false xor true);
var_dump($valeur);

// faux ou exclusif faux, équivaut à faux
$valeur = (false xor false);
var_dump($valeur);

echo "\n";

// algèbre booléen sans parenthèse

echo "sans parenthèses\n";

// sans parenthèses, seul le premier `true` est évalué
$valeur = true xor true;
var_dump($valeur);

// sans parenthèses, seul le premier `true` est évalué
$valeur = true xor false;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false xor true;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false xor false;
var_dump($valeur);

