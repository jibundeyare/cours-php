<?php
// la variable `$a` est définie dans une fonction
// une variable est toujours visible par du code se trouvant au même niveau

function test() {
    $a = 'toto';
    echo $a;
    echo "\n";
}

// affiche "toto"
test();

