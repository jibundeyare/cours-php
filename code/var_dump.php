<?php
// la fonction `var_dump()` permet d'inspecter le contenu d'une variable
// @warning attention il s'agit d'une fonction qui sert au déboggage, pas à afficher des informations à l'utilisateur

$nombre = 42;
var_dump($nombre);

$pi = 3.14;
var_dump($pi);

$texte = 'une chaîne de caractères';
var_dump($texte);

$boolean = true;
var_dump($boolean);

$tableau = array(1, 2, 3);
var_dump($tableau);

$objet = new stdClass();
var_dump($objet);

$handle = fopen(__FILE__, 'r');
var_dump($handle);
fclose($handle);

$f = function() {};
var_dump($f);

