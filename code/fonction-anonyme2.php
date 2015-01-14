<?php
// définition d'une fonction anonyme et affectation à une variable nommée `direBonjour`
$direBonjour = function() {
    // corps de la fonction

    // affichage d'un message
    echo "Bonjour !\n";
};

// appel sans aucun paramètre de la fonction anonyme stockée dans la variable `direBonjour`
$direBonjour();

// affectation du contenu de la variable `$direBonjour` à la variable `$a`
// maintenant, a contient aussi la fonction anonyme
$a = $direBonjour;

// appel sans aucun paramètre de la fonction anonyme stockée dans la variable `$a
$a();

// définition d'une nouvelle fonction anonyme et affectation à la variable `$a`
$a = function() {
    echo "Salut !\n";
};

// appel sans aucun paramètre de la fonction anonyme stockée dans la variable `$a
$a();

