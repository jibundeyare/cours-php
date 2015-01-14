<?php
// première méthode de transtypage

$nombre = "42";

echo (int) $nombre;
echo PHP_EOL;

$nombre = "3.14";

echo (int) $nombre;
echo PHP_EOL;

$calcul = "42 + 42";

echo (int) $calcul;
echo PHP_EOL;

$phrase = "Bonjour Php";

echo (int) $phrase;
echo PHP_EOL;

$phrase = "";

echo (int) $phrase;
echo PHP_EOL;

// deuxième méthode de transtypage avec une fonction

$nombre = "42";

echo intval($nombre);
echo PHP_EOL;

$nombre = "3.14";

echo intval($nombre);
echo PHP_EOL;

$calcul = "42 + 42";

echo intval($calcul);
echo PHP_EOL;

$phrase = "Bonjour Php";

echo intval($phrase);
echo PHP_EOL;

$phrase = "";

echo intval($phrase);
echo PHP_EOL;

