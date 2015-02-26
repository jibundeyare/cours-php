<?php

// les champs `textarea` ne renvoient qu'une seule valeur

$validation = true;

$formulaire = array(
    'commentaire' => ''
);

$messages = array(
    'commentaire' => '',
    'formulaire' => ''
);

if ($_POST) {
    if (isset($_POST['commentaire']) && !empty($_POST['commentaire'])) {
        $formulaire['commentaire'] = $_POST['commentaire'];
    } else {
        $validation = false;
        $messages['commentaire'] = "merci de remplir un commentaire";
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
    <div><?php echo htmlentities($messages['commentaire']) ?></div>
    <label for="commentaire">commentaire</label><br />
    <textarea name="commentaire"><?php echo htmlentities($formulaire['commentaire']); ?></textarea><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
