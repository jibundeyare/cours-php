<?php
// inclusion d'un fichier qui n'existe pas
// cette inclusion génèrera une erreur : 'PHP Warning:  require(foo.php): failed to open stream: No such file or directory'
// l'erreur stopera le programme sur le champ
require 'foo.php';

echo "ce message ne s'affichera pas";
echo PHP_EOL;

