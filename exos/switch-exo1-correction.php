<?php

// bloc 1
switch (true) {
case true:
    echo "c'est vrai";
    echo PHP_EOL;
}

// bloc 2
$i = 2;

switch ($i) {
case 100:
    echo "égal à cent";
    echo PHP_EOL;
    break;
default:
    echo "différent de cent";
    echo PHP_EOL;
}

// bloc 3
$password = "1234";

switch ($password) {
case "toto":
    echo "vous êtes loggé";
    echo PHP_EOL;
    break;
case "password":
case "1234":
case "abcd":
    echo "êtes-vous un robot ?";
    echo PHP_EOL;
    break;
default:
    echo "mauvais mot de passe";
    echo PHP_EOL;
}

// bloc 4
$variable = 1;

switch (true) {
case is_string($variable):
    echo "$variable est une chaîne de caractères";
    echo PHP_EOL;
    break;
case is_float($variable):
    echo "$variable est un nombre à virgule flottante";
    echo PHP_EOL;
    break;
case is_array($variable):
    echo "$variable est une liste ";
    echo PHP_EOL;
    break;
case is_int($variable):
    echo "$variable est un nomnbre entier";
    echo PHP_EOL;
    break;
}

