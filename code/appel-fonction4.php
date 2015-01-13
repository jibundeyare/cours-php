<?php
$texte = 'abcdefgh';

function extraction($texte, $debut, $fin) {
    $resultat = substr($texte, $debut, $fin);

    if ($resultat === false) {
        echo 'erreur';
        echo PHP_EOL;
    } else if ($resultat === '') {
        echo 'chaîne de caractères vide';
        echo PHP_EOL;
    } else {
        echo $resultat;
        echo PHP_EOL;
    }
}

extraction($texte, 0, 8);
extraction($texte, 9, 8);
extraction($texte, 0, 0);

