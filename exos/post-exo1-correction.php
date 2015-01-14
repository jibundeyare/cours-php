<?php

$identifiant = "";
$mot_de_passe = "";
$message = "merci d'entrer vos identifiants";

if (isset($_POST['identifiant']) && isset($_POST['mot_de_passe'])) {

    if ($_POST['identifiant'] == 'admin' && $_POST['mot_de_passe'] == '123') {
        $message = 'ok, identifiant et mot de passe corrects';
    } else {
        $message = 'identifiant ou mot de passe incorrect !';
    }

    $identifiant = $_POST['identifiant'];
    $mot_de_passe = $_POST['mot_de_passe'];
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<p><?php echo $message; ?></p>

<form action="" method="post">
    <label for="identifiant">identifiant</label><br />
    <input name="identifiant" type="text" value="<?php echo $identifiant; ?>" /><br />
    <label for="mot_de_passe">mot de passe</label><br />
    <input name="mot_de_passe" type="password" value="<?php echo $mot_de_passe; ?>" /><br />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
