<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<form action="" method="get">
    <label for="titre">titre</label>
    <input name="titre" type="text" />
    <input type="submit" value="envoyer" />
</form>

<?php
// la variable `$_GET` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_GET` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les données dans la variable `$_GET`, même si c'est une chaîne de caractères vide
echo '<pre>';
var_dump($_GET);
echo '</pre>';
?>

</body>
</html>
