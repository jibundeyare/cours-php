<?php
// connection à la bdd
require('mysqli-connect.php');

// paramètres de la requête sql
$prenom = 'Foo';
$nom = 'Bar';
$email = 'foo.bar@baz.com';

// création d'une requête sql
$sql = "
INSERT INTO user
(prenom, nom, email)
VALUES
('" . mysqli_real_escape_string($link, $prenom) . "', '" . mysqli_real_escape_string($link, $nom) . "', '" . mysqli_real_escape_string($link, $email) . "')
";

// exécution de la requête sql
$result = mysqli_query($link, $sql);

// vérification du résultat
if ($result) {
    // récupération de la clé primaire de la dernière ligne insérée
    $id = mysqli_insert_id($link);

    // affichage d'un message de confirmation
    $message = "utilisateur inséré dans la base de données avec l'id $id";
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
