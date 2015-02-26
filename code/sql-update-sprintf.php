<?php
// connection à la bdd
require('mysqli-connect.php');

// paramètres de la requête sql
$id = 1;
$prenom = 'lorem';
$nom = 'ipsum';
$email = 'lorem.ipsum@dolores.com';

// création d'une requête sql
$sql = sprintf(
    "UPDATE user
    SET prenom = '%s', nom = '%s', email = '%s'
    WHERE id = '%d'",
    mysqli_real_escape_string($link, $prenom),
    mysqli_real_escape_string($link, $nom),
    mysqli_real_escape_string($link, $email),
    mysqli_real_escape_string($link, $id)
);

// exécution de la requête sql
$result = mysqli_query($link, $sql);

// vérification du résultat
if ($result) {
    $message = "utilisateur mis à jour dans la base de données";
} else {
    // @dev pendant le développement, on peut afficher l'erreur de connexion
    echo "erreur d'exécution de la requête sql : " . mysqli_error($link);
    echo "<br />";
    echo "la requête sql : " . $sql;
    echo "<br />";
    exit();

    // @prod quand le site est en production, on redirige l'utilisateur vers une page d'erreur
    // header('location: erreur-500.php', true, 302);
    // exit();
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<p><?php echo htmlentities($message); ?></p>

</body>
</html>
