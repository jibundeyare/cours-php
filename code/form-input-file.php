<?php

// les champs `input` de type `file` permettent de pousser (uploader) un fichier vers un serveur

$validation = true;

// @note les champs `input` de type `file` ne peuvent pas avoir de valeur par défaut

// les fichiers envoyés seront enregistrés dans le dossier courant
$upload_dir = __DIR__ ;

// messages par défaut
$messages = array(
    'fichier' => '',
    'formulaire' => ''
);

// vérification des fichiers envoyés
if ($_FILES) {
    // validation du champ 'fichier'
    if (isset($_FILES['fichier']) && !empty($_FILES['fichier'])) {
        switch ($_FILES['fichier']['error']) {
        case UPLOAD_ERR_OK:
            // il n'y a pas d'erreur
            // on peut stocker le fichier
            if (!move_uploaded_file($_FILES['fichier']['tmp_name'], $upload_dir . '/' . $_FILES['fichier']['name'])) {
                // il y a une erreur
                // php n'est pas parvenu à stocker le fichier
                $validation = false;
                // affectation d'un message d'erreur
                $messages['fichier'] = "une erreur est survenue, le fichier '{$_FILES['fichier']['name']}' n'a pas pu être enregistré";
            }
            break;
        case UPLOAD_ERR_NO_FILE:
            // il y a une erreur
            // l'utilisateur n'a pas envoyé de fichier
            $validation = false;
            // affectation d'un message d'erreur
            $messages['fichier'] = "merci de sélectionner un fichier";
            break;
        default:
            // il y a une erreur
            $validation = false;
            // affectation d'un message d'erreur
            $messages['fichier'] = "une erreur est survenue, le fichier '{$_FILES['fichier']['name']}' n'a pas pu être enregistré";
        }
    }

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

<?php // il faut utiliser l'attribut `enctype="multipart/form-data"` pour que le fichier puisse être envoyé ?>
<form action="" method="post" enctype="multipart/form-data" >
    <div><?php echo htmlentities($messages['fichier']) ?></div>
    <label for="fichier">fichier</label><br />
    <input name="fichier" type="file" /><br />

    <input type="submit" value="envoyer" />
</form>

</body>
</html>
