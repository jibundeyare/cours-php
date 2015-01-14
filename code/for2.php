<?php
// la variable nommée `$liste` contient un tableau simple de trois éléments
$liste = array(
    'foo',
    'bar',
    'baz'
);

// initialisation d'une variable nommée `$i` qui servira d'index / compteur
// la boucle for se terminera quand `$i` vaudra `count($liste)`, c-à-d quand `$i` sera égal au nombre d'éléments dans la variable `$liste`
// la variable `$i` est incrémentée de 1 à chaque tour
for ($i = 0; $i < count($liste); $i++) {
    // tour à tour, on affiche chaque élément de la variable `$liste`
    echo $liste[$i];
    echo PHP_EOL;
}

