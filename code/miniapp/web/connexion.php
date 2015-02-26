<?php
// inclusion des librairies
require('../lib/http.php');
require('../lib/security.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// vérification si l'utilisateur n'est pas déjà connecté
if (security_user_is_set()) {
    // redirection de l'utilisateur vers la home page
    http_redirect('home.php');
}

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

    if (isset($_POST['password']) && !empty($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $validation = false;
        $messages[] = "vous n'avez pas renseigné de mot de passe";
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

    // vérification du résultat de la requête
    if ($result) {
        // récupération de la première ligne de résultat
        $row = mysqli_fetch_assoc($result);

        // vérification de la première ligne de résultat
        if ($row) {
            if (password_verify($password, $row['password_hash'])) {
                // stockage de l'identité de l'utilisateur dans la variable de session
                security_set_user(array(
                    'id' => $row['id'],
                    'prenom' => $row['prenom'],
                    'nom' => $row['nom'],
                    'email' => $row['email']
                ));

                // redirection de l'utilisateur vers la home page
                http_redirect('home.php');
            } else {
                // email correct mais mot de passe incorrect
                $messages[] = 'votre email ou votre mot de passe est inccorect';
            }
        } else {
            // email incorrect
            $messages[] = 'votre email ou votre mot de passe est inccorect';
        }
    } else {
        // @debug
        // echo "erreur d'exécution de la requête sql : " . mysqli_error($link);
        // exit();

        // redirection vers une page d'erreur
        http_redirect('erreur-500.php');
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

    <label for="password">mot de passe</label><br />
    <input name="password" type="password" value="<?php echo htmlentities($password) ?>" /><br />

    <input type="submit" value="se connecter" /><br />
</form>

<p>
    <a href="inscription.php">inscription</a><br />
    <a href="mot-de-passe-oublie.php">mot de passe oublié</a><br />
</p>

</body>
</html>
