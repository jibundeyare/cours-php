<?php
$fichier = 'appel-fonction1.txt';

if (file_exists($fichier)) {
    $texte = file_get_contents($fichier);
    echo $texte;
} else {
    echo "le fichier '$fichier' n'existe pas\n";
}

