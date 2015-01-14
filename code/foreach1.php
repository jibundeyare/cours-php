<?php
// la variable nommée `$liste` contient un tableau simple de trois éléments
$liste = array(
    'foo',
    'bar',
    'baz'
);

// début de la boucle
// à chaque tour, php affecte la valeur de chaque élément de la variable `$liste` à la variable `$element`
foreach ($liste as $element) {
    // affichage de la variable `$element`
    echo $element;
    echo PHP_EOL;
}

