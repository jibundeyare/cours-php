<?php
// inspection du contenu des cookie
var_dump($_COOKIE);

// la variable `$_COOKIE` est un tableau
// affectation de couples clé / valeur à la variable `$_COOKIE`
$_COOKIE['foo'] = 'bar';
$_COOKIE['baz'] = 42;

// inspection du contenu des cookie
var_dump($_COOKIE);

