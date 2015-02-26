<?php
// ouverture d'un fichier
$handle = fopen('hello.php', 'r');

// récupération du contenu du fichier avec la fonction `fgets()`
// boucle continue tant qu'il y a du contenu dans le fichier
while (($buffer = fgets($handle)) !== false) {
    // affichage d'un contenu du fichier
    echo $buffer;
}

// fermeture du fichier
fclose($handle);

