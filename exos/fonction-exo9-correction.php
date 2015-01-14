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

// autre implémentation possible
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

$resultat = a_plus_grand_que_b(10, 5);
var_dump($resultat);

$resultat = a_plus_grand_que_b(2, 8);
var_dump($resultat);

$resultat = a_plus_grand_que_b(7, 7);
var_dump($resultat);

$resultat = a_plus_grand_que_b('foo', 5);
var_dump($resultat);

$resultat = a_plus_grand_que_b(10, 'bar');
var_dump($resultat);

$resultat = a_plus_grand_que_b('foo', 'bar');
var_dump($resultat);

