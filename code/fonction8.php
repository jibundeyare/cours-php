<?php
// définition de la fonction
// toutes les fonctions peuvent prendre un nombre illimité de paramètres
// à l'intérieure de la fonction, l'appel à la fonction `func_get_args()` permet de récupérer dans un tableau tous les paramètres passés à la fonction
function listeLangages() {
    // boucle sur chacun des paramètres passés à la fonction
    foreach (func_get_args() as $auditeur) {
        // affichage du paramètre
        echo $auditeur . PHP_EOL;
    }
}

// syntaxe altérnative possible à partir de php 5.6.0
// function listeLangages(...$auditeurs) {
//     foreach ($auditeurs as $auditeur) {
//         echo $auditeur . PHP_EOL;
//     }
// }

// appel de la fonction avec cinq paramètres
listeLangages('Php', 'Html', 'Css', 'Javascript', 'Sql');

