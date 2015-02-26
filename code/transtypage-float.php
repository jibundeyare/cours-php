<?php
// transtypage en nombre à virgule flottante

// première méthode de transtypage

$nombre = "3.14";
var_dump((float) $nombre);

$nombre = "42";
var_dump((float) $nombre);

$calcul = "3.14 + 3.14";
var_dump((float) $calcul);

$phrase = "Bonjour Php";
var_dump((float) $phrase);

$phrase = "";
var_dump((float) $phrase);

// deuxième méthode de transtypage avec une fonction

$nombre = "3.14";
var_dump(floatval($nombre));

$nombre = "42";
var_dump(floatval($nombre));

$calcul = "3.14 + 3.14";
var_dump(floatval($calcul));

$phrase = "Bonjour Php";
var_dump(floatval($phrase));

$phrase = "";
var_dump(floatval($phrase));

