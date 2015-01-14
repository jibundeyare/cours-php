<?php
// définition de la fonction
// la fonction :
// - prend une variable nommées `$personnes` obligatoirement de type `array` comme paramètre
// - prend une deuxième variable nommée `$familier` dont la valeur par défaut est `false` comme paramètre optionnel
function direBonjour(array $personnes, $familier = false) {
    // boucle sur chaque élément du tableau
    foreach ($personnes as $personne) {
        // vérification de la valeur de la variable `$familier`
        if ($familier) {
            // affichage d'un message
            echo "Salut $personne !\n";
        } else {
            // affichage d'un message
            echo "Bonjour $personne !\n";
        }
    }
}

// affectation d'un tableau simple à la variable `$noms`
$noms = array('Php', 'Html', 'Css', 'Javascript', 'Sql');

// appel de la fonction `direBonjour` avec la variable `$noms` (qui contient un tableau) comme paramètres
// le deuxième paramètre est optionnel
direBonjour($noms);

// appel de la fonction `direBonjour` avec :
// - la variable `$noms` (qui contient un tableau) comme paramètre
// - la valeur `true` comme deuxième paramètre
direBonjour($noms, true);

