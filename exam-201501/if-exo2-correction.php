<?php

// Écrivez un bloc `if` qui affiche dans la console :
// - "a ou b est plus grand que 5" si `$a` est plus grand que `5` ou que `$b` est plus grand que `5`
// - "a et b sont plus petits ou égaux à 5" dans tous les autres cas

$a = rand(0, 10);
$b = rand(0, 10);

echo "a = $a";
echo PHP_EOL;
echo "b = $b";
echo PHP_EOL;

if ($a > 5 || $b > 5) {
    echo "a ou b est plus grand que 5";
    echo PHP_EOL;
} else {
    echo "a et b sont plus petits ou égaux à 5";
    echo PHP_EOL;
}

