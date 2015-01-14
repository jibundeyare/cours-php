<?php

function nombres_entiers($a, $b) {
    if (is_int($a) && is_int($b)) {
        return true;
    } else {
        return false;
    }
}

// autre implémentation possible
// function nombres_entiers($a, $b) {
//     if (!is_int($a) || !is_int($b)) {
//         return false;
//     } else {
//         return true;
//     }
// }

$resultat = nombres_entiers(10, 5);
var_dump($resultat);

$resultat = nombres_entiers(2, 8);
var_dump($resultat);

$resultat = nombres_entiers(7, 7);
var_dump($resultat);

$resultat = nombres_entiers('foo', 5);
var_dump($resultat);

$resultat = nombres_entiers(10, 'bar');
var_dump($resultat);

$resultat = nombres_entiers('foo', 'bar');
var_dump($resultat);

