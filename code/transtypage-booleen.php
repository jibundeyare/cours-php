<?php
// transtypage en booléen

// attention : `boolval` n'est disponible qu'à partir de PHP 5.5.0

// première méthode de transtypage

$valeur = true;
var_dump((bool) $valeur);

$valeur = 1;
var_dump((bool) $valeur);

$valeur = 3.14;
var_dump((bool) $valeur);

$valeur = "foo";
var_dump((bool) $valeur);

$valeur = 'foo';
var_dump((bool) $valeur);

$valeur = array('foo', 1, 3.14);
var_dump((bool) $valeur);

$valeur = false;
var_dump((bool) $valeur);

$valeur = 0;
var_dump((bool) $valeur);

$valeur = 0.0;
var_dump((bool) $valeur);

$valeur = "";
var_dump((bool) $valeur);

$valeur = '';
var_dump((bool) $valeur);

$valeur = "0";
var_dump((bool) $valeur);

$valeur = '0';
var_dump((bool) $valeur);

$valeur = array();
var_dump((bool) $valeur);

$valeur = null;
var_dump((bool) $valeur);

// deuxième méthode de transtypage avec une fonction

if (version_compare(PHP_VERSION, '5.5.0', '>=')) {
    $valeur = true;
    var_dump(boolval($valeur));

    $valeur = 1;
    var_dump(boolval($valeur));

    $valeur = 3.14;
    var_dump(boolval($valeur));

    $valeur = "foo";
    var_dump(boolval($valeur));

    $valeur = 'foo';
    var_dump(boolval($valeur));

    $valeur = array('foo', 1, 3.14);
    var_dump(boolval($valeur));

    $valeur = false;
    var_dump(boolval($valeur));

    $valeur = 0;
    var_dump(boolval($valeur));

    $valeur = 0.0;
    var_dump(boolval($valeur));

    $valeur = "";
    var_dump(boolval($valeur));

    $valeur = '';
    var_dump(boolval($valeur));

    $valeur = "0";
    var_dump(boolval($valeur));

    $valeur = '0';
    var_dump(boolval($valeur));

    $valeur = array();
    var_dump(boolval($valeur));

    $valeur = null;
    var_dump(boolval($valeur));
}

