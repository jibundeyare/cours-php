<?php

// formulaire en plusieurs étapes

// démarrage de la session
session_start();

// on part du principe que le formulaire est valide
// on déclarera une erreur si on en trouve une lors de la validation du formulaire
$validation = true;

// valeurs par défaut du formulaire
$formulaire = array(
    'email' => ''
);

// messages par défaut du formulaire
$messages = array(
    'email' => '',
    'formulaire' => ''
);

// validation des données du formulaire
if ($_POST) {
    // validation du champ 'email'
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // il n'y a pas d'erreur
        // on peut stocker la valeur du champ dans une variable
        $formulaire['email'] = $_POST['email'];
    } else {
        // il y a une erreur
        $validation = false;
        // affectation d'un message d'erreur
        $messages['email'] = "merci de préciser le email";
    }

    // vérification de la validation
    if ($validation) {
        // il n'y a pas d'erreurs

        // stockage des valeurs du formulaire dans la variable de session
        $_SESSION['email'] = $formulaire['email'];

        // redirection vers le formulaire suivant
        header('location: form-etape3.php', true, 302);
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
    <div><?php echo htmlentities($messages['email']) ?></div>
    <label for="email">email</label><br />
    <?php // il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html ?>
    <input name="email" type="text" value="<?php echo htmlentities($formulaire['email']); ?>" /><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
