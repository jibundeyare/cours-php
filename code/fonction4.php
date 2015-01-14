<?php
// définition de la fonction
// la fonction prend deux variables nommées `$prenom` et `$nom` comme paramètres
function direBonjour($prenom, $nom) {
    // concaténation puis affichage d'une variable
    $personne = $prenom . ' ' . $nom;
    // renvoit du résultat de l'interpolation
    return "Bonjour $personne !\n";
}

// appel de la fonction `direBonjour` avec les chaînes de caractères `'Php'` et `'5.6'` comme paramètres
// affichage de la valeur renvoyée par la fonction
echo direBonjour('Php', '5.6');

// affectation de la valeur renvoyée par la fonction à la variable `$phrase`
$phrase = direBonjour('Php', '5.6');
// affichage de la variable `$phrase`
echo $phrase;

