<?php

// les champs `input` de type `password` ne renvoient qu'une seule valeur
// les champs `input` de type `password` se comportent comme des champs `input` de type `text`

$validation = true;

$formulaire = array(
    'mot_de_passe' => ''
);

$messages = array(
    'mot_de_passe' => '',
    'formulaire' => ''
);

if ($_POST) {
    if (isset($_POST['mot_de_passe']) && !empty($_POST['mot_de_passe'])) {
        $formulaire['mot_de_passe'] = $_POST['mot_de_passe'];
    } else {
        $validation = false;
        $messages['mot_de_passe'] = "merci de préciser le mot de passe";
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
    <div><?php echo htmlentities($messages['mot_de_passe']) ?></div>
    <label for="mot_de_passe">mot de passe</label><br />
    <input name="mot_de_passe" type="password" value="<?php echo htmlentities($formulaire['mot_de_passe']); ?>" /><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
