<?php
// la variable nommée `$liste` contient un tableau associatif de trois éléments
$liste = array(
    'artichaut' => 3,
    'broccoli' => 2,
    'carotte' => 5,
);

// début de la boucle
// à chaque tour, php affecte :
// - la clé de chaque élément de la variable `$liste` à la variable `$cle`
// - la valeur de chaque élément de la variable `$liste` à la variable `$valeur`
foreach ($liste as $cle => $valeur) {
    // affichage des variables `$cle` et `$valeur`
    echo "$cle : $valeur";
    echo PHP_EOL;
}

