<?php

/*

le formulaire html ci-dessous contient un champ `identifiant` et un champ `mot_de_passe`

quand l'utilisateur soumet le formulaire :
- vérifiez à l'aide d'un bloc `if` que les clés `$_POST['identifiant']` et `$_POST['mot_de_passe']` sont bien initialisées
- si oui, vérifiez que la valeur `$_POST['identifiant']` est égal à `'admin'` et que la valeur `$_POST['mot_de_passe']` est égal à '123'
- si l'identifiant et le mot de passe sont corrects, afficher le message `'ok, identifiant et mot de passe corrects'`
- sinon affichez le message `'identifiant ou mot de passe incorrect !'`

*/

$identifiant = "";
$mot_de_passe = "";
$message = "merci d'entrer vos identifiants";

if (isset($_POST['identifiant']) && isset($_POST['mot_de_passe'])) {
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
