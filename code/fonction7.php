<?php
function corrigeNom1($prenom, $nom) {
    $prenom = ucfirst($prenom);
    $nom = ucfirst($nom);
}

function corrigeNom2(&$prenom, &$nom) {
    $prenom = ucfirst($prenom);
    $nom = ucfirst($nom);
}

$prenom = 'php';
$nom = 'html';

corrigeNom1($prenom, $nom);
echo $prenom . ' ' . $nom;
echo PHP_EOL;

corrigeNom2($prenom, $nom);
echo $prenom . ' ' . $nom;
echo PHP_EOL;

