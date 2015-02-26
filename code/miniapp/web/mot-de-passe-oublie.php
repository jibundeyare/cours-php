<?php
// inclusion des librairies
require('../lib/http.php');
require('../lib/password.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// connexion à la base de données
require('mysqli-connect.php');

$validation = true;
$messages = array();
$email = '';
$password = '';

if ($_POST) {
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $validation = false;
        $messages[] = "vous n'avez pas renseigné d'email";
    }
}

// on ne traite le formulaire que si l'utilisateur a envoyé des données et qu'elles sont valides
if ($_POST && $validation) {
    // création de la requête sql
    $sql = sprintf(
        "SELECT * FROM user WHERE email = '%s'",
        mysqli_real_escape_string($link, $email)
    );

    // exécution de la requête sql
    $result = mysqli_query($link, $sql);

    // on ne traite la demande de création d'un nouveau mot de passe que si l'email existe
    if ($result->num_rows == 1) {
        // création d'un nouveau mot de passe
        $password = password_generate_random_string();

        // paramètres de la requêtes sql
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // création de la requête sql
        $sql = sprintf(
            "UPDATE user
            SET password_hash = '%s'
            WHERE email = '%s'",
            mysqli_real_escape_string($link, $password_hash),
            mysqli_real_escape_string($link, $email)
        );

        // exécution de la requête sql
        $result = mysqli_query($link, $sql);

        // vérification du résultat de la requête
        if ($result) {
            $to = $email;
            $subject = 'Nouveau mot de passe';
            $text = 'votre nouveau mot de passe : ' . $password;
            $text = wordwrap($text, 70, "\r\n");

            // @debug
            // echo $text . '<br />';
            // exit();

            // envoi du mail
            if (!mail($to, $subject, $text)) {
                // redirection vers une page d'erreur si le mail n'a pas pu être envoyé
                http_redirect('erreur-500.php');
            }
        } else {
            // @debug
            // echo 'erreur d\'exécution de la requête sql : ' . mysqli_error($link);
            // exit();

            // redirection vers une page d'erreur
            http_redirect('erreur-500.php');
        }
    } else {
        $messages[] = 'cet email est introuvable';
        $validation = false;
    }
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<?php if (!empty($messages)): ?>
<p>
<?php
foreach ($messages as $message) {
    echo htmlentities($messages) . '<br />';
}
?>
</p>
<?php endif; ?>

<form action="" method="post">
    <label for="email">email</label><br />
    <input name="email" type="text" value="<?php echo htmlentities($email) ?>" /><br />

    <input type="submit" value="obtenir un nouveau mot de passe" /><br />
</form>

<p>
    <a href="connexion.php">connexion</a><br />
    <a href="inscription.php">inscription</a><br />
</p>

</body>
</html>
