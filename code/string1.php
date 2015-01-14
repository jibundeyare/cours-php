<?php
// affectation
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

// interpolation et affectation
$phrase = "Salut $nom";

// affichage
echo $phrase;
echo PHP_EOL;

// affectation sans interpolation
$phrase = 'Salut $nom';

// affichage
echo $phrase;
echo PHP_EOL;

