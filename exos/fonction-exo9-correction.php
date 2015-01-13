<?php

function a_plus_grand_que_b($a, $b) {
    if (is_int($a) && is_int($b)) {
        if ($a > $b) {
            return 1;
        } else if ($a < $b) {
            return -1;
        } else {
            return 0;
        }
    } else {
        return false;
    }
}

// deuxième implémentation possible
// function a_plus_grand_b($a, $b) {
//     if (!is_int($a) || !is_int($b)) {
//         return false;
//     } else {
//         if ($a > $b) {
//             return 1;
//         } else if ($a < $b) {
//             return -1;
//         } else {
//             return 0;
//         }
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

