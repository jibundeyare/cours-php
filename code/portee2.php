<?php
// la variable `$a` est définie dans la portée globale
// une variable déclarée dans la portée globale n'est pas visible par du code se trouvant dans une fonction

$a = 'toto';

function test() {
    echo $a;
    echo "\n";
}

// affiche l'erreur "PHP Notice:  Undefined variable: a"
test();

