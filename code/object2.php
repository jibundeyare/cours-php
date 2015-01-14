<?php
// instantiation d'un objet de la classe DateTime
$date = new DateTime();

// affichage du résultat l'appel de la méthode `format()` de la variable `$date` avec une chaîne de caractères comme paramètre
echo $date->format('Y-m-d H:i:s');
echo PHP_EOL;

