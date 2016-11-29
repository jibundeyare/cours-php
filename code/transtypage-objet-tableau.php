<?php

// instantiation d'un objet de la classe stdClass
$article = new stdClass();

// affectation de valeurs
$article->id = 100;
$article->nom = 'foo';
$article->prix = 42.00;

$tableau = (array) $article;

echo $tableau['id'];
echo '<br />';

echo $tableau['nom'];
echo '<br />';

echo $tableau['prix'];
echo '<br />';

$article2 = (object) $tableau;

echo $article2->id;
echo '<br />';

echo $article2->nom;
echo '<br />';

echo $article2->prix;
echo '<br />';

