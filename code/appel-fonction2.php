<?php
// ce script créé un fichier et écrit un texte dedans

// le nom du nouveau fichier
$fichier = 'appel-fonction1.txt';
// le texte qui sera écrit dans le fichier
$texte = "hello world!\n";

// écriture dans le fichier
file_put_contents($fichier, $texte);

