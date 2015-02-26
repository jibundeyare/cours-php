<?php
// connection à la bdd
require('mysqli-connect.php');

// paramètres de la requête sql
$email = 'foo.bar@baz.com';

// création d'une requête sql
$sql = sprintf(
    "SELECT *
    FROM user
    WHERE email = '%s'",
    mysqli_real_escape_string($link, $email)
);

// exécution de la requête sql
$result = mysqli_query($link, $sql);

// vérification du résultat
if (!$result) {
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

<?php if ($result->num_rows > 0): ?>
<p>nombre de résultats : <?php echo $result->num_rows; ?></p>

<table>
    <th>
        <td>id</td>
        <td>email</td>
    </th>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?=htmlentities($row['id'])?></td>
        <td><?=htmlentities($row['email'])?></td>
    </tr>
    <?php endwhile; ?>
</table>

<?php else: ?>
<p>pas de résultat</p>
<?php endif; ?>

</body>
</html>
