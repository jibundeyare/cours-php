<?php
// première méthode

$nombre = "3.14";

echo (float) $nombre;
echo PHP_EOL;

$nombre = "42";

echo (float) $nombre;
echo PHP_EOL;

$calcul = "3.14 + 3.14";

echo (float) $calcul;
echo PHP_EOL;

$phrase = "Bonjour Php";

echo (float) $phrase;
echo PHP_EOL;

$phrase = "";

echo (float) $phrase;
echo PHP_EOL;

// deuxième méthode

$nombre = "3.14";

echo floatval($nombre);
echo PHP_EOL;

$nombre = "42";

echo floatval($nombre);
echo PHP_EOL;

$calcul = "3.14 + 3.14";

echo floatval($calcul);
echo PHP_EOL;

$phrase = "Bonjour Php";

echo floatval($phrase);
echo PHP_EOL;

$phrase = "";

echo floatval($phrase);
echo PHP_EOL;

