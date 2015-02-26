<?php
// ce script vous montre comment récupérer et vérifier les données d'un formulaire envoyé (avec la méthode post) par l'utilisateur

// on part du principe que le formulaire est valide
// on déclarera une erreur si on en trouve une lors de la validation du formulaire
$validation = true;

// valeurs par défaut du formulaire
$formulaire = array(
    'titre' => '',
    'auteur' => '',
    'description' => ''
);

// messages par défaut du formulaire
$messages = array(
    'titre' => '',
    'auteur' => '',
    'description' => '',
    'formulaire' => ''
);

// validation des données du formulaire
if ($_POST) {
    // validation du champ 'titre'
    if (isset($_POST['titre']) && !empty($_POST['titre'])) {
        // il n'y a pas d'erreur
        // on peut stocker la valeur du champ dans une variable
        $formulaire['titre'] = $_POST['titre'];
    } else {
        // il y a une erreur
        $validation = false;
        // affectation d'un message d'erreur
        $messages['titre'] = "merci de remplir le titre";
    }

    // validation du champ 'auteur'
    if (isset($_POST['auteur']) && !empty($_POST['auteur'])) {
        // il n'y a pas d'erreur
        // on peut stocker la valeur du champ dans une variable
        $formulaire['auteur'] = $_POST['auteur'];
    } else {
        // il y a une erreur
        $validation = false;
        // affectation d'un message d'erreur
        $messages['auteur'] = "merci de remplir l'auteur";
    }

    // validation du champ optionnel 'description'
    if (isset($_POST['description']) && !empty($_POST['description'])) {
        // il n'y a pas d'erreur
        // on peut stocker la valeur du champ dans une variable
        $formulaire['description'] = $_POST['description'];
    }
    // ce champ est optionnel, du coup même s'il n'est pas rempli, on ne déclare pas d'erreur avec `$validation = false;`

    // vérification de la validation
    if ($validation) {
        // il n'y a pas d'erreurs
        // affectation d'un message de confirmation
        $messages['formulaire'] = "merci d'avoir rempli le formulaire";
    } else {
        // il y a des erreurs
        // affectation d'un message d'erreur
        $messages['formulaire'] = "merci de remplir le formulaire et de le valider";
    }
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>

</head>
<body>

<div><?php echo htmlentities($messages['formulaire']) ?></div>

<form action="" method="post">
    <div><?php echo htmlentities($messages['titre']) ?></div>
    <label for="titre">titre</label><br />
    <?php // il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html ?>
    <input name="titre" type="text" value="<?php echo htmlentities($formulaire['titre']); ?>" /><br />

    <div><?php echo htmlentities($messages['auteur']) ?></div>
    <label for="auteur">auteur</label><br />
    <?php // il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html ?>
    <input name="auteur" type="text" value="<?php echo htmlentities($formulaire['auteur']); ?>" /><br />

    <div><?php echo htmlentities($messages['description']) ?></div>
    <label for="description">description</label><br />
    <?php // il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html ?>
    <textarea name="description"><?php echo htmlentities($formulaire['description']); ?></textarea><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
