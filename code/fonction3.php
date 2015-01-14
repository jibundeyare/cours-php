<?php
// définition de la fonction
// la fonction prend deux variables nommées `$prenom` et `$nom` comme paramètres
function direBonjour($prenom, $nom) {
    // concaténation
    $personne = $prenom . ' ' . $nom;
    // affichage de l'interpolation
    echo "Bonjour $personne !\n";
}

// appel de la fonction `direBonjour` avec les chaînes de caractères `'Php'` et `'5.6'` comme paramètres
direBonjour('Php', '5.6');

