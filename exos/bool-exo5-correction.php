<?php

$carte_fidelite = false;
$demande = 4;

$places_normales = rand(0, 10);
$places_carte_fidelite = rand(0, 5);

echo "carte_fidelite: $carte_fidelite\n";
echo "demande: $demande\n";
echo "places_normales: $places_normales\n";
echo "places_carte_fidelite: $places_carte_fidelite\n";

switch (true) {
case $carte_fidelite && $demande <= $places_carte_fidelite:
case $carte_fidelite && $demande <= $places_normales:
case !$carte_fidelite && $demande <= $places_normales:
    echo "la réservation est enregistrée\n";
    break;
default:
    echo "il n'y a pas assez de places\n";
}

