<?php
// instantiation d'un objet de la classe stdClass
$article = new stdClass();

// affectation de valeurs
$article->id = 100;
$article->nom = 'foo';
$article->prix = 42.00;

echo $article->id;
echo '<br />';

echo $article->nom;
echo '<br />';

echo $article->prix;
echo '<br />';

