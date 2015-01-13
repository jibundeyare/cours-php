<?php
$texte = "PHP: Hypertext Preprocessor, plus connu sous son sigle PHP";
$debut = 0;
$longueur = 27;

$filtreMajsculeToute = function($texte) use ($debut, $longueur) {
    $texte = substr($texte, $debut, $longueur);
    return strtoupper($texte);
};

$filtreMinsculeToute = function($texte) use ($debut, $longueur) {
    $texte = substr($texte, $debut, $longueur);
    return strtolower($texte);
};

$filtreMajsculeMot = function($texte) use (&$debut, &$longueur) {
    $texte = substr($texte, $debut, $longueur);
    return ucwords($texte);
};

function modifierTexte($texte, $filtre) {
    $texte = $filtre($texte);
    return $texte . PHP_EOL;
}

echo modifierTexte($texte, $filtreMajsculeToute);
echo modifierTexte($texte, $filtreMinsculeToute);

$texte = "L'Hypertext Markup Language, généralement abrégé HTML, est le format de données conçu pour représenter les pages web.";
$debut = 66;
$longueur = 18;

echo modifierTexte($texte, $filtreMajsculeToute);
echo modifierTexte($texte, $filtreMajsculeMot);

