<?php

/*

le formulaire html ci-dessous contient un champ `titre`
rajoutez :
- un champ `auteur` à la suite du champ `titre` dans le code html
- un block `if` qui traite le champ `auteur`

*/

$titre = "";

if (isset($_GET['titre']) && !empty($_GET['titre'])) {
    $titre = $_GET['titre'];
}
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<form action="" method="get">
    <label for="titre">titre</label><br />
    <input name="titre" type="text" value="<?php echo $titre; ?>" /><br />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
