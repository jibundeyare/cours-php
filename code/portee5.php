<?php
// la variable `$a` est définie dans la portée globale
// en utilisant le mot clé `global`, une variable déclarée dans la portée globale devient visible par du code se trouvant dans une fonction

$a = 'toto';

function test() {
    global $a;
    echo $a;
    echo "\n";
}

// affiche "toto"
test();

