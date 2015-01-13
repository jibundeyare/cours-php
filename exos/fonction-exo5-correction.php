<?php

function puissance($a, $b = 2) {
    // avec php < 5.6
    return pow($a, $b);

    // avec php >= 5.6.0
    // return $a ** $b;
}

echo puissance(2);
echo PHP_EOL;

echo puissance(2, 3);
echo PHP_EOL;

