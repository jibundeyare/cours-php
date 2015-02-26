<?php
// la variable `$a` est définie dans une fonction
// une variable déclarée dans une fonction n'est pas visible par du code se trouvant dans la portée globale

function test() {
    $a = 'toto';
}

test();

// affiche l'erreur "PHP Notice:  Undefined variable: a"
echo $a;
echo "\n";

