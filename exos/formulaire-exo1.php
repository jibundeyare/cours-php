<?php

/*

créez un formulaire qui permet d'enregistrer des notes

- les données doivent être enregistrées dans un fichier nommé `formulaire-exo1.txt`
- s'il y a des données enregistrées, le formulaire doit les afficher
- le formulaire doit enregistrer les données de la variable `$_POST['notes']`
- vous pouvez utiliser les fonctions `file_put_contents()`, `file_get_contents()` et `file_exists()`

*/

$notes = '';

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title></title>

<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

<style type="text/css">
#notes {
    display: block;
    height: 10rem;
    width: 400px;
}

#recharger {
    display: inline-block;
    margin-top: 1rem;
}

</style>

</head>
<body>

<h1>notes</h1>
<form action="" method="post">
    <textarea id="notes" name="notes" ><?php echo $notes; ?></textarea>
    <input type="submit" value="enregistrer" />
</form>

<a id="recharger" href="">recharger la page</a>

</body>
</html>
