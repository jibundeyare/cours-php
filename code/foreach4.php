<?php
// la variable nommée `$tableau` contient plusieurs tableaux associatifs
// la variable nommée `$tableau` est un tableau à deux dimensions
$tableau = array(
    array('id' => '1', 'nom' => 'php'),
    array('id' => '2', 'nom' => 'html'),
    array('id' => '3', 'nom' => 'css'),
    array('id' => '4', 'nom' => 'javascript'),
    array('id' => '5', 'nom' => 'sql'),
);

// début de la boucle
// à chaque tour, php affecte la valeur de chaque élément de la variable `$tableau` à la variable `$ligne`
foreach ($tableau as $ligne) {
    // début de la boucle
    // à chaque tour, php affecte :
    // - la clé de chaque élément de la variable `$ligne` à la variable `$cle`
    // - la valeur de chaque élément de la variable `$ligne` à la variable `$valeur`
    foreach ($ligne as $cle => $valeur) {
        // affichage des variables `$cle` et `$valeur`
        echo "$cle : $valeur";
        echo PHP_EOL;
    }
}

