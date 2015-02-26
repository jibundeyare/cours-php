<?php
// comparaison de la valeur booléenne `true` à une suite de comparaisons

$a = true;
$b = true;

switch (true) {
case !$a && $b:
    echo "a n'est pas vrai mais b est vrai\n";
    break;
case $a && !$b:
    echo "a est vrai mais b n'est pas vrai\n";
    break;
case $a && $b:
    echo "a et b sont vrai\n";
    break;
case !$a && !$b:
    echo "ni a ni b ne sont vrai\n";
    break;
}

