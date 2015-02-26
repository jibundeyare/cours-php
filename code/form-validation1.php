<?php
// ce script vous montre comment récupérer et vérifier les données d'un formulaire envoyé (avec la méthode post) par l'utilisateur
// @warning ce script ne permet pas de faire une validation complète, il montre seulement comment utiliser les fonctions `isset()` et `empty()`

// on définit des valeurs par défaut que l'utilisateur verra avant d'avoir envoyé le formulaire
$titre = '';
$message = "merci de remplir le formulaire et de le valider";

// vérifions que l'utilisateur a bien soumis le formulaire
if ($_POST) {
    // vérifions que :
    // - le couple clé / valeur `$_POST['titre']` existe bien avec la fonction `isset()`
    // - la valeur `$_POST['titre']` n'est pas vide avec la fonction `empty()` et l'opérateur de négation `!`
    if (isset($_POST['titre']) && !empty($_POST['titre'])) {
        // il n'y a pas d'erreur
        // l'utilisateur a bien envoyé une valeur et celle-ci est non vide

        // on peut stocker la valeur du champ dans une variable
        $titre = $_POST['titre'];

        // affectation d'un nouveau message pour l'utilsateur
        $message = "merci d'avoir rempli le formulaire";
    }
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<div><?php echo htmlentities($message) ?></div>

<form action="" method="post">
    <label for="titre">titre</label>
    <?php // il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html ?>
    <input name="titre" type="text" value="<?php echo htmlentities($titre); ?>" />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
