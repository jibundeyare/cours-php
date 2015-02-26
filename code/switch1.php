<?php
// comparaison d'une variable et d'une suite de nombres entiers

$nombre = 2;

switch ($nombre) {
case 0:
    echo "le nombre est égale à 0\n";
    break;
case 1:
    echo "le nombre est égale à 1\n";
    break;
case 2:
    echo "le nombre est égale à 2\n";
    break;
default:
    echo "le nombre est différent de 0, 1 ou 2\n";
}

