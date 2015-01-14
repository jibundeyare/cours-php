<?php
// la variable nommée `$tableau` contient plusieurs tableaux simples
// la variable nommée `$tableau` est un tableau à deux dimensions
$tableau = array(
    array('1', 'php'),
    array('2', 'html'),
    array('3', 'css'),
    array('4', 'javascript'),
    array('5', 'sql'),
);

// initialisation d'une variable nommée `$i` qui servira d'index / compteur
// la boucle for se terminera quand `$i` vaudra `count($tableau)`, c-à-d quand `$i` sera égal au nombre d'éléments dans la variable `$tableau`
// la variable `$i` est incrémentée de 1 à chaque tour
for ($i = 0; $i < count($tableau); $i++) {
    // tour à tour, on affecte chaque élément de la variable `$tableau` à la variable `$ligne`
    $ligne = $tableau[$i];

    // initialisation d'une variable nommée `$j` qui servira d'index / compteur
    // la boucle for se terminera quand `$j` vaudra `count($ligne)`, c-à-d quand `$j` sera égal au nombre d'éléments dans la variable `$ligne`
    // la variable `$j` est incrémentée de 1 à chaque tour
    for ($j  = 0; $j < count($ligne); $j++) {
        // tour à tour, on affiche chaque élément de la variable `$ligne`
        echo $ligne[$j];
        echo PHP_EOL;
    }
}

