<?php
// inclusion d'une librairie pour ajouter des fonctionnalités
require 'lib-user-input.php';

// utilisation des fonctions de cette librairie
$user_input = user_input_get_answer('entrez quelque chose :');

echo "vous avez entré '$user_input'";
echo PHP_EOL;

