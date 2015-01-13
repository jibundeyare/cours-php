<?php

/*
PHP: switch - Manual
http://php.net/manual/en/control-structures.switch.php

PHP: PHP type comparison tables - Manual
http://php.net/manual/en/types.comparisons.php#types.comparisions-loose
*/

$liste = array(null, new stdClass(), 'cours de php', 4.2, 42);

for ($i = 0; $i < count($liste); $i++) {

    $variable = $liste[$i];

    if (is_null($variable) === $variable) {
        echo '$variable a la valeur NULL';
        echo PHP_EOL;
    } else if (is_object($variable) === $variable) {
        echo '$variable est un objet';
        echo PHP_EOL;
    } else if (is_string($variable) === $variable) {
        echo '$variable est une chaîne de caractères';
        echo PHP_EOL;
    } else if (is_float($variable) === $variable) {
        echo '$variable est un nombre à virgule flottante';
        echo PHP_EOL;
    } else if (is_int($variable) === $variable) {
        echo '$variable est un nombre entier';
        echo PHP_EOL;
    }

}

