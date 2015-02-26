<?php
// ce document html contient un formulaire avec un champ nommé `fichier` permettant de pousser (uploader) un fichier vers un serveur
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php // il faut utiliser l'attribut `enctype="multipart/form-data"` pour que le fichier puisse être envoyé ?>
<form action="" method="post" enctype="multipart/form-data" >
    <label for="fichier">fichier</label><br />
    <input name="fichier[]" type="file" /><br />
    <input name="fichier[]" type="file" /><br />
    <input type="submit" value="envoyer" />
</form>

<?php
// la variable `$_FILES` est un tableau
// avant que l'utilisateur ne valide le formulaire la variable `$_FILES` ne contient aucune donnée
// quand l'utilisateur valide le formulaire, on retrouve les information concernant le fichier uploadé dans la variable `$_FILES`
echo '<pre>';
var_dump($_FILES);
echo '</pre>';
?>

</body>
</html>
