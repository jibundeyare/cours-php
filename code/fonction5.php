<?php
// définition de la fonction
// la fonction prend une variable nommées `$personnes` obligatoirement de type `array` comme paramètre
function direBonjour(array $personnes) {
    // boucle sur chaque élément du tableau
    foreach ($personnes as $personne) {
        // affichage de l'élément
        echo "Bonjour $personne !\n";
    }
}

// affectation d'un tableau simple à la variable `$noms`
$noms = array('Php', 'Html', 'Css', 'Javascript', 'Sql');
// appel de la fonction `direBonjour` avec la variable `$noms` (qui contient un tableau) comme paramètre
direBonjour($noms);

// affectation d'une chaîne de caractère à la variable `$nom`
$nom = 'Php';
// appel de la fonction `direBonjour` avec la variable `$nom` (qui contient une chaîne de caractères) comme paramètre
// cela génère une erreur : 'PHP Catchable fatal error:  Argument 1 passed to direBonjour() must be of the type array, string given'
direBonjour($nom);

