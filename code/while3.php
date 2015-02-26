<?php
// initialisation d'une variable qui servira d'index / compteur
$i = 0;
// initialisation d'une variable qui servira à controler la boucle
$boucler = true;

// itération d'une boucle de type `while` tant que la variable `$boucler == true`
while ($boucler) {
    // affichage de la variable `$i`
    echo $i;
    echo PHP_EOL;

    // incrémentation de la variable `$i`
    $i++;

    // vérification de la valeur de la variable `$i`
    if ($i == 10) {
        // en affectant la valeur `false` à la variable `$boucle`, on arrête la boucle
        $boucler = false;
    }
}

