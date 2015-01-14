<?php
// démarrage ou récupération d'une session en cours pour le navigateur qui a fait la requête
session_start();
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php
// la variable `$_SESSION` est un tableau
// elle contient des données stockées dans la session en cours
// on boucle sur tous les couples clé / valeur de la variable `$_SESSION`
foreach ($_SESSION as $cle => $valeur) {
    // affichage d'un couple clé / valeur et du type de donnée de la valeur
    echo $cle . ' = (' . gettype($valeur) . ') ' . $valeur;

    // affichage d'un saut de ligne html
    // note : br = break = cassure
    echo '<br />';
}
?>

</body>
</html>
