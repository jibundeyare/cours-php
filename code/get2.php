<?php
// ce document html contient un formulaire avec un champ nommé `titre` dont les données sont envoyées par la méthode `get`

// on définit des valeurs par défaut que l'utilisateur verra avant d'avoir envoyé le formulaire
$titre = "";
$message = "merci de remplir le formulaire et de le valider";

// vérifions que :
// - le couple clé / valeur `$_GET['titre']` existe bien avec la fonction `isset()`
// - la valeur `$_GET['titre']` n'est pas vide avec la fonction `empty()` et l'opérateur de négation `!`
if (isset($_GET['titre']) && !empty($_GET['titre'])) {
    // l'utilisateur a bien envoyé une valeur et celle-ci est non vide

    // affectation de la valeur de `$_GET['titre']` à la variable `$titre`
    $titre = $_GET['titre'];

    // affectation d'un nouveau message pour l'utilsateur
    $message = "merci d'avoir rempli le formulaire";
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<p><?php echo $message ?></p>

<form action="" method="get">
    <label for="titre">titre</label><br />
    <input name="titre" type="text" value="<?php echo $titre; ?>" /><br />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
