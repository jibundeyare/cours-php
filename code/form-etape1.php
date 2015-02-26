<?php

// formulaire en plusieurs étapes

// démarrage de la session
session_start();

// on part du principe que le formulaire est valide
// on déclarera une erreur si on en trouve une lors de la validation du formulaire
$validation = true;

// valeurs par défaut du formulaire
$formulaire = array(
    'titre' => ''
);

// messages par défaut du formulaire
$messages = array(
    'titre' => '',
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
        $messages['titre'] = "merci de préciser le titre";
    }

    // vérification de la validation
    if ($validation) {
        // il n'y a pas d'erreurs

        // stockage des valeurs du formulaire dans la variable de session
        $_SESSION['titre'] = $formulaire['titre'];

        // redirection vers le formulaire suivant
        header('location: form-etape2.php', true, 302);
        exit();
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

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
