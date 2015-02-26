<?php
// initialisation d'une variable qui servira d'index / compteur
$i = 0;

// itération d'une boucle de type `while` tant que la variable `$boucler == true`
while (true) {
    // affichage de la variable `$i`
    echo $i;
    echo PHP_EOL;

    // incrémentation de la variable `$i`
    $i++;

    // vérification de la valeur de la variable `$i`
    if ($i == 10) {
        // on arrête la boucle avec le mot clé `break`
        break;
    }
}

