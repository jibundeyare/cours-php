<?php
function direBonjour(array $personnes, $familier = false) {
    foreach ($personnes as $personne) {
        if ($familier) {
            echo "Salut $personne !\n";
        } else {
            echo "Bonjour $personne !\n";
        }
    }
}

$noms = array('Php', 'Html', 'Css', 'Javascript', 'Sql');

direBonjour($noms);

direBonjour($noms, true);

