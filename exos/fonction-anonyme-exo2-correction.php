<?php

$lePlusGrand = function($a, $b) {
    if (is_int($a) && is_int($b)) {
        if ($a > $b) {
            return $a;
        } else {
            return $b;
        }
    } else {
        return false;
    }
};

// autre implémentation possible
// $lePlusGrand = function($a, $b) {
//     if (!is_int($a) || !is_int($b)) {
//         return false;
//     } else {
//         if ($a > $b) {
//             return $a;
//         } else {
//             return $b;
//         }
//     }
// };

$resultat = $lePlusGrand(10, 5);
var_dump($resultat);

$resultat = $lePlusGrand(2, 8);
var_dump($resultat);

$resultat = $lePlusGrand(7, 7);
var_dump($resultat);

$resultat = $lePlusGrand('foo', 5);
var_dump($resultat);

$resultat = $lePlusGrand(10, 'bar');
var_dump($resultat);

$resultat = $lePlusGrand('foo', 'bar');
var_dump($resultat);

