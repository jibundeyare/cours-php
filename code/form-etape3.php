<?php

// formulaire en plusieurs étapes

// démarrage de la session
session_start();

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>

</head>
<body>

<p>vous avez entré :</p>

<label for="titre">titre</label><br />
<?php
// affichage d'une valeur stockée dans la variable de session
// il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html
?>
<input disabled="disabled" name="titre" type="text" value="<?php echo htmlentities($_SESSION['titre']); ?>" /><br />
<label for="email">email</label><br />
<?php
// affichage d'une valeur stockée dans la variable de session
// il faut utiliser la fonction `htmlentities()` pour afficher une variable dans du code html
?>
<input disabled="disabled" name="email" type="text" value="<?php echo htmlentities($_SESSION['email']); ?>" /><br />

</body>
</html>
