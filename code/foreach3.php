<?php
// la variable nommée `$liste` contient un tableau simple de trois éléments
$liste = array(
    'foo',
    'bar',
    'baz'
);

// début de la boucle
// à chaque tour, php affecte :
// - la clé de chaque élément de la variable `$liste` à la variable `$cle`
// - la valeur de chaque élément de la variable `$liste` à la variable `$valeur`
foreach ($liste as $cle => $valeur) {
    // affichage des variables `$cle` et `$valeur`
    // on remarque que php avait automatiquement affecté des nombres entiers en commençant par 0 comme clé de chaque élément
    echo "$cle : $valeur";
    echo PHP_EOL;
}

