<?php
// comparaison de deux variables

$places_dispo = 2;
$demandes = 2;

if ($places_dispo >= $demandes) {
    echo "Résa confirmée";
    echo PHP_EOL;
} else if ($places_dispo == $demandes) {
    echo "Résa confirmée (vous avez de la chance, c'étaient les dernières places)";
    echo PHP_EOL;
} else {
    echo "Désolé, nous sommes complet";
    echo PHP_EOL;
}

