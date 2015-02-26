<?php
// la variable `$a` est définie dans une fonction
// en utilisant le mot clé `global`, une variable déclarée dans une fonction devient visible par du code se trouvant dans la portée globale

function test() {
    global $a;
    $a = 'toto';
}

test();

// affiche "toto"
echo $a;
echo "\n";

