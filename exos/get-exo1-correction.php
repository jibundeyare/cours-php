<?php
$titre = "";
$auteur = "";

if (isset($_GET['titre']) && !empty($_GET['titre'])) {
    $titre = $_GET['titre'];
}

if (isset($_GET['auteur']) && !empty($_GET['auteur'])) {
    $auteur = $_GET['auteur'];
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
    <label for="auteur">auteur</label><br />
    <input name="auteur" type="text" value="<?php echo $auteur; ?>" /><br />
    <input type="submit" value="envoyer" />
</form>

</body>
</html>
