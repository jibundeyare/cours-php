<?php

// les champs `select` ne renvoient qu'une seule valeur

$validation = true;

// valeurs du champ `select` avec des balises `optgroup`
$aliments = array(
    'fruits' => array(
        'fraise',
        'kiwi',
        'orange'
    ),
    'légumes' => array(
        'carotte',
        'courgette',
        'pomme de terre'
    )
);

$formulaire = array(
    'aliment' => ''
);

$messages = array(
    'aliments' => '',
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
    <label for="aliment">aliment</label>
    <select name="aliment">
    <?php // génération `optgroup` avec une boucle ?>
    <?php foreach ($aliments as $optgroup => $items): ?>
    <optgroup label="<?php echo htmlentities($optgroup); ?>">
        <?php // génération du champ avec une boucle ?>
        <?php foreach ($items as $item): ?>
            <?php // comparaison des données envoyées par l'utilisateur ?>
            <?php if ($formulaire['aliment'] == $item): ?>
            <?php // l'utilisateur a coché cette case ?>
            <option selected="selected" value="<?php echo htmlentities($item); ?>"><?php echo htmlentities($item); ?></option>
            <?php else: ?>
            <?php // l'utilisateur n'a pas coché cette case ?>
            <option value="<?php echo htmlentities($item); ?>"><?php echo htmlentities($item); ?></option>
            <?php endif; ?>
        <?php endforeach; ?>
    </optgroup>
    <?php endforeach; ?>
    </select>

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
