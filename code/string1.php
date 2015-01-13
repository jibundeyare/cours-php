<?php
// affectaction
$nom = "Php";
$salutation = "Bonjour";

// concaténation et affichage
echo $salutation . ' ' . $nom;
echo PHP_EOL;

// concaténation et affectation
$phrase = $salutation . ' ' . $nom;

// affichage
echo $phrase;
echo PHP_EOL;

// interpolation et affichage
echo "Bonjour $nom";
echo PHP_EOL;

// interpolation et affectaction
$phrase = "Salut $nom";

// affichage
echo $phrase;
echo PHP_EOL;

// affectaction sans interpolation
$phrase = 'Salut $nom';

// affichage
echo $phrase;
echo PHP_EOL;

