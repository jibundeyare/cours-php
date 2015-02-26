<?php

// Écrivez une fonction qui calcul le nombre de places libres dans un parking
// Affichez dans la console le résultat renvoyé par la fonction

$nombre_places_parking = 42;
$nombres_voitures = rand(0, $nombre_places_parking);

echo "nombre_places_parking = $nombre_places_parking";
echo PHP_EOL;
echo "nombres_voitures = $nombres_voitures";
echo PHP_EOL;

function places_libres($nombres_voitures, $nombre_places_parking) {
    return $nombre_places - $nombres_voitures;
}

echo places_libres($nombres_voitures, $nombre_places_parking);
echo PHP_EOL;

