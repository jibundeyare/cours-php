<?php
// transtypage en nombre entier

// première méthode de transtypage

$nombre = "42";
var_dump((int) $nombre);

$nombre = "3.14";
var_dump((int) $nombre);

$calcul = "42 + 42";
var_dump((int) $calcul);

$phrase = "Bonjour Php";
var_dump((int) $phrase);

$phrase = "";
var_dump((int) $phrase);

// deuxième méthode de transtypage avec une fonction

$nombre = "42";
var_dump(intval($nombre));

$nombre = "3.14";
var_dump(intval($nombre));

$calcul = "42 + 42";
var_dump(intval($calcul));

$phrase = "Bonjour Php";
var_dump(intval($phrase));

$phrase = "";
var_dump(intval($phrase));

