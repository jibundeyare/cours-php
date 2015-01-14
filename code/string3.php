<?php
// affectation
$nom = "Php";

// interpolation et affichage
// utilisation du signe d'échappement `\` pour afficher un retour à la ligne
echo "Bonjour Php\n";

// affichage sans interpolation
// le retour à la ligne n'est pas affiché, la chaîne de caractère est littéralement affichée
echo 'Bonjour Php\n';
echo PHP_EOL;

// attention : cette instruction n'affichera pas `Bonjour Php5.6`
// elle affichera `Bonjour .6` en générant une erreur `PHP Notice:  Undefined variable: nom5`
echo "Bonjour $nom5.6";
echo PHP_EOL;

// pour afficher `Bonjour Php5.6` il faut utiliser les signes `{` (accolade ouvrante) et `}` (accolade fermante) pour indiquer à php les limites du nom de la variable
echo "Bonjour {$nom}5.6";
echo PHP_EOL;

// mais on peut aussi utiliser la concaténation
echo "Bonjour $nom" . "5.6";
echo PHP_EOL;

