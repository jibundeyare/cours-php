<?php

// les champs `input` de type `text` ne renvoient qu'une seule valeur

$validation = true;

$formulaire = array(
    'titre' => ''
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

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
