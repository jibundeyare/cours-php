<?php
// la variable `$a` est définie dans la portée globale
// en utilisant le variable `$GLOBALS`, une variable déclarée dans la portée globale devient visible par du code se trouvant dans une fonction


$a = 'toto';

function test() {
    echo $GLOBALS['a'];
    echo "\n";
}

// affiche "toto"
test();

