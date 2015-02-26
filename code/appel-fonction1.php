<?php
// ce script vérifie la présence d'un fichier et lit son contenu

// le nom du fichier
$fichier = 'appel-fonction1.txt';

// vérification de présence du fichier
if (file_exists($fichier)) {
    // le fichier existe

    // lecture de son contenu
    $texte = file_get_contents($fichier);
    // affichage de son contenu
    echo $texte;
} else {
    // le fichier n'existe pas
    echo "le fichier '$fichier' n'existe pas\n";
}

