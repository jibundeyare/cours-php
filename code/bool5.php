<?php
// algèbre booléen avec parenthèse

echo "avec parenthèses\n";

// vrai et vrai, équivaut à vrai
$valeur = (true and true);
var_dump($valeur);

// vrai et faux, équivaut à faux
$valeur = (true and false);
var_dump($valeur);

// vrai et faux, équivaut à faux
$valeur = (false and true);
var_dump($valeur);

// vrai et faux, équivaut à faux
$valeur = (false and false);
var_dump($valeur);

echo "\n";

// algèbre booléen sans parenthèse

echo "sans parenthèses\n";

// sans parenthèses, seul le premier `true` est évalué
$valeur = true and true;
var_dump($valeur);

// sans parenthèses, seul le premier `true` est évalué
$valeur = true and false;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false and true;
var_dump($valeur);

// sans parenthèses, seul le premier `false` est évalué
$valeur = false and false;
var_dump($valeur);

