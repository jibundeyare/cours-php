<?php

/*

simplifier encore plus les blocs conditionnels en utilisant l'opérateur booléen `||`

*/

$carte_fidelite = true;
$demande = 4;

$places_normales = rand(0, 10);
$places_carte_fidelite = rand(0, 5);

echo "carte_fidelite: $carte_fidelite\n";
echo "demande: $demande\n";
echo "places_normales: $places_normales\n";
echo "places_carte_fidelite: $places_carte_fidelite\n";

if ($carte_fidelite && $demande <= $places_carte_fidelite) {
    echo "la réservation est enregistrée\n";
} else if ($carte_fidelite && $demande <= $places_normales) {
    echo "la réservation est enregistrée\n";
} else if (!$carte_fidelite && $demande <= $places_normales) {
    echo "la réservation est enregistrée\n";
} else {
    echo "il n'y a pas assez de places\n";
}

