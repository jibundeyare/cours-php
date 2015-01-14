<?php
// démarrage ou récupération d'une session en cours pour le navigateur qui a fait la requête
session_start();

// la variable `$_SESSION` est un tableau
// affectation de couples clé / valeur à la variable `$_SESSION`
$_SESSION['foo'] = 'bar';
$_SESSION['baz'] = 42;

