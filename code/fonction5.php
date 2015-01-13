<?php
function direBonjour(array $personnes) {
    foreach ($personnes as $personne) {
        echo "Bonjour $personne !\n";
    }
}

$noms = array('Php', 'Html', 'Css', 'Javascript', 'Sql');
direBonjour($noms);

// provoque une erreur
$nom = 'Php';
direBonjour($nom);

