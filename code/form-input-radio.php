<?php

// les champs `input` de type `radio` ne renvoient qu'une seule valeur

$validation = true;

// valeurs du champ `input` de type 'radio'
$aliments = array(
    'carotte',
    'courgette',
    'fraise',
    'kiwi',
    'orange',
    'pomme de terre'
);

$formulaire = array(
    'aliment' => ''
);

$messages = array(
    'aliment' => '',
    'formulaire' => ''
);

if ($_POST) {
    if (isset($_POST['aliment']) && !empty($_POST['aliment'])) {
        $formulaire['aliment'] = $_POST['aliment'];
    } else {
        $validation = false;
        $messages['aliment'] = "merci de préciser l'aliment";
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
    <div><?php echo htmlentities($messages['aliment']) ?></div>
    <label for="aliment">aliment</label><br />
    <?php // génération du champ avec une boucle ?>
    <?php foreach ($aliments as $item): ?>
    <?php // comparaison des données envoyées par l'utilisateur ?>
    <?php if ($formulaire['aliment'] == $item): ?>
    <?php // l'utilisateur a coché cette case ?>
    <input checked="checked" name="aliment" type="radio" value="<?php echo htmlentities($item); ?>" /> <?php echo htmlentities($item); ?><br />
    <?php else: ?>
    <?php // l'utilisateur n'a pas coché cette case ?>
    <input name="aliment" type="radio" value="<?php echo htmlentities($item); ?>" /> <?php echo htmlentities($item); ?><br />
    <?php endif; ?>
    <?php endforeach; ?>

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
