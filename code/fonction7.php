<?php
// définition de la fonction
// cette fonction prend deux paramètres
// les paramètres sont passés par valeur
function corrigeNom1($prenom, $nom) {
    // mettre la première lettre en majuscule
    $prenom = ucfirst($prenom);
    $nom = ucfirst($nom);
}

// définition de la fonction
// cette fonction prend deux paramètres
// les paramètres sont passés par référence
function corrigeNom2(&$prenom, &$nom) {
    // mettre la première lettre en majuscule
    $prenom = ucfirst($prenom);
    $nom = ucfirst($nom);
}

$prenom = 'php';
$nom = 'html';

corrigeNom1($prenom, $nom);
// après l'appel de la fonction où les paramètres sont passés par valeur, les variables de `$prenom` et `$nom` ne changent pas
echo $prenom . ' ' . $nom;
echo PHP_EOL;

corrigeNom2($prenom, $nom);
// après l'appel de la fonction où les paramètres sont passés par référence, les variables de `$prenom` et `$nom` changent
echo $prenom . ' ' . $nom;
echo PHP_EOL;

