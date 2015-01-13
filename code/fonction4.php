<?php
function direBonjour($prenom, $nom) {
    $personne = $prenom . ' ' . $nom;
    return "Bonjour $personne !\n";
}

echo direBonjour('Php', '5.6');

$phrase = direBonjour('Php', '5.6');
echo $phrase;

