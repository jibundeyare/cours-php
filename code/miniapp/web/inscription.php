<?php
// inclusion des librairies
require('../lib/http.php');
require('../lib/security.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// connexion à la base de données
require('mysqli-connect.php');

$validation = true;
$messages = array();
$prenom = '';
$nom = '';
$email = '';
$password = '';
$password_confirmation = '';

if ($_POST) {
    if (isset($_POST['prenom']) && !empty($_POST['prenom'])) {
        $prenom = $_POST['prenom'];
    } else {
        $validation = false;
        $messages[] = "vous n'avez pas renseigné de prénom";
    }

    if (isset($_POST['nom']) && !empty($_POST['nom'])) {
        $nom = $_POST['nom'];
    } else {
        $validation = false;
        $messages[] = "vous n'avez pas renseigné de nom";
    }

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

    if (isset($_POST['password_confirmation']) && $_POST['password_confirmation'] == $_POST['password']) {
        $password_confirmation = $_POST['password_confirmation'];
    } else {
        $validation = false;
        $messages[] = "la confirmation de votre mot de passe ne correspond pas";
    }
}

// on ne traite le formulaire que si l'utilisateur a envoyé des données et qu'elles sont valides
if ($_POST && $validation) {
    // vérification si cet email n'est pas déjà enregistré
    // création de la requête sql
    $sql = sprintf(
        "SELECT * FROM user WHERE email = '%s'",
        mysqli_real_escape_string($link, $email)
    );

    // exécution de la requête sql
    $result = mysqli_query($link, $sql);

    // vérification du résultat de la requête
    if ($result->num_rows > 0) {
        // cet email est déjà enregistré, l'utilisateur ne peut pas créer de compte
        $messages[] = "désolé, cet email est déjà utilisé";
    } else {
        // cet email n'est pas encore enregistré, l'utilisateur peut créer un compte

        // paramètres de la requêtes sql
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        // création de la requête sql
        $sql = sprintf(
            "INSERT INTO user
            (prenom, nom, email, password_hash)
            VALUES
            ('%s', '%s', '%s', '%s')",
            mysqli_real_escape_string($link, $prenom),
            mysqli_real_escape_string($link, $nom),
            mysqli_real_escape_string($link, $email),
            mysqli_real_escape_string($link, $password_hash)
        );

        // exécution de la requête sql
        $result = mysqli_query($link, $sql);

        // vérification du résultat de la requête
        if ($result) {
            // stockage de l'identité de l'utilisateur dans la variable de session
            security_set_user(array(
                'id' => mysqli_insert_id($link),
                'prenom' => $prenom,
                'nom' => $nom,
                'email' => $email
            ));

            // redirection de l'utilisateur vers la home page
            http_redirect('home.php');
        } else {
            // @debug
            // echo "erreur d'exécution de la requête sql : " . mysqli_error($link);
            // exit();

            // redirection vers une page d'erreur
            http_redirect('erreur-500.php');
        }
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
    <label for="prenom">prenom</label><br />
    <input name="prenom" type="text" value="<?php echo htmlentities($prenom) ?>" /><br />

    <label for="nom">nom</label><br />
    <input name="nom" type="text" value="<?php echo htmlentities($nom) ?>" /><br />

    <label for="email">email</label><br />
    <input name="email" type="text" value="<?php echo htmlentities($email) ?>" /><br />

    <label for="password">mot de passe</label><br />
    <input name="password" type="password" value="<?php echo htmlentities($password) ?>" /><br />

    <label for="password_confirmation">confirmation du mot de passe</label><br />
    <input name="password_confirmation" type="password" value="<?php echo htmlentities($password_confirmation) ?>" /><br />

    <input type="submit" value="s'inscrire" />
</form>

<p>
    <a href="connexion.php">connexion</a><br />
    <a href="mot-de-passe-oublie.php">mot de passe oublié</a><br />
</p>

</body>
</html>
