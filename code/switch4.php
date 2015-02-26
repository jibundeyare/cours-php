<?php
// comparaison de la valeur booléenne `true` à une suite de comparaisons

$a = false;
$b = false;

switch (true) {
case !$a && $b:
case $a && !$b:
    echo "a n'est pas vrai mais b est vrai\n";
    echo "ou a est vrai mais b n'est pas vrai\n";
    break;
case $a && $b:
case !$a && !$b:
    echo "a et b sont vrai\n";
    echo "ou ni a ni b ne sont vrai\n";
    break;
}

