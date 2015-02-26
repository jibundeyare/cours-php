<?php

// Écrivez un bloc `if` qui affiche dans la console :
// - "accès autorisé" si `$carte_parking` vaut `1` et que `$places_disponibles` vaut `1`
// - "accès non autorisé" dans tous les autres cas

$carte_parking = rand(0, 1);
$places_disponibles = rand(0, 1);

echo "carte_parking = $carte_parking";
echo PHP_EOL;
echo "places_disponibles = $places_disponibles";
echo PHP_EOL;

if ($carte_parking == 1 && $places_disponibles == 1) {
    echo "accès autorisé";
    echo PHP_EOL;
} else {
    echo "accès non autorisé";
    echo PHP_EOL;
}

