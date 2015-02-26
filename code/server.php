<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
// la variable `$_SERVER` est un tableau
// elle contient des données sur le serveur, le script en cours d'exécution et le navigateur qui a lancé la requête
// on boucle sur tous les couples clé / valeur de la variable `$_SERVER`
foreach ($_SERVER as $cle => $valeur) {
    // affichage d'un couple clé / valeur
    echo $cle . ' = ' . $valeur;

    // affichage d'un saut de ligne html
    // note : br = break = cassure
    echo '<br />';
}
?>

</body>
</html>
