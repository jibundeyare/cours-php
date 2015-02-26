<?php
// inclusion d'un fichier qui n'existe pas
// cette inclusion génère une erreur : "PHP Warning:  require(foo.php): failed to open stream: No such file or directory"
require 'foo.php';

// le script s'est arrêté
echo "ce message ne s'affiche pas";
echo PHP_EOL;

