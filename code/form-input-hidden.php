<?php

// les champs `input` de type `hidden` ne renvoient qu'une seule valeur
// les champs `input` de type `hidden` ne s'affichent pas à l'écran mais leurs données sont envoyées
// les champs `input` de type `hidden` se comportent comme des champs `input` de type `text`

$validation = true;

// valeurs par défaut du formulaire
$formulaire = array(
    'titre' => '',
    'code_isbn' => 'ISBN-X-XXX-XXXXX-X'
);

$messages = array(
    'titre' => '',
    'formulaire' => ''
);

if ($_POST) {
    if (isset($_POST['titre']) && !empty($_POST['titre'])) {
        $formulaire['titre'] = $_POST['titre'];
    } else {
        $validation = false;
        $messages['titre'] = "merci de préciser le titre";
    }

    if (isset($_POST['code_isbn']) && !empty($_POST['code_isbn'])) {
        $formulaire['code_isbn'] = $_POST['code_isbn'];
    } else {
        $validation = false;
        $messages['code_isbn'] = "une erreur s'est produite, le code ISBN n'est pas précisé";
    }

    if ($validation) {
        $messages['formulaire'] = "merci d'avoir rempli le formulaire";
    } else {
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
    <input name="titre" type="text" value="<?php echo htmlentities($formulaire['titre']); ?>" /><br />

    <input name="code_isbn" type="hidden" value="<?php echo htmlentities($formulaire['code_isbn']); ?>" /><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
