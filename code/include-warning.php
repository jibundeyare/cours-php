<?php
// inclusion d'un fichier qui n'existe pas
// cette inclusion génère un warning : "PHP Warning:  include(foo.php): failed to open stream: No such file or directory"
include 'foo.php';

// le script continue son exécution
echo "ce message s'affiche";
echo PHP_EOL;

