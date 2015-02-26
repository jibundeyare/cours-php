<?php
// inclusion des libraries
require('../lib/http.php');
require('../lib/security.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// sécurisation de la page
security_filter_user();

// connexion à la base de données
require('mysqli-connect.php');

$validation = true;
$messages = array();
$prenom = '';
$nom = '';
$email = '';

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
}

// on ne traite le formulaire que si l'utilisateur a envoyé des données et qu'elles sont valides
if ($_POST && $validation) {
    // vérification si cet email n'est pas déjà enregistré
    // création de la requête sql
    $sql = sprintf(
        "UPDATE user
        SET prenom = '%s', nom = '%s', email = '%s'
        WHERE id = %d",
        mysqli_real_escape_string($link, $prenom),
        mysqli_real_escape_string($link, $nom),
        mysqli_real_escape_string($link, $email),
        mysqli_real_escape_string($link, $_SESSION['user']['id'])
    );

    // exécution de la requête sql
    $result = mysqli_query($link, $sql);

    // vérification du résultat de la requête
    if ($result) {
        // stockage de l'identité de l'utilisateur dans la variable de session
        security_set_user(array(
            'id' => $_SESSION['user']['id'],
            'prenom' => $prenom,
            'nom' => $nom,
            'email' => $email
        ));

        $messages[] = "votre profil a été mis à jour";
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

<h1>profil</h1>

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
    <label for="id" >id</label><br />
    <input disabled="disabled" name="id"  type="text" value="<?php echo htmlentities($_SESSION['user']['id']); ?>" /><br />

    <label for="nom" >nom</label><br />
    <input name="nom" type="text" value="<?php echo htmlentities($_SESSION['user']['nom']); ?>" /><br />

    <label for="prenom" >prenom</label><br />
    <input name="prenom" type="text" value="<?php echo htmlentities($_SESSION['user']['prenom']); ?>" /><br />

    <label for="email" >email</label><br />
    <input name="email" type="text" value="<?php echo htmlentities($_SESSION['user']['email']); ?>" /><br />

    <input type="submit" value="mettre à jour" /><br />
</form>

<p>
    <a href="home.php">home</a><br />
    <a href="deconnexion.php">déconnexion</a><br />
</p>

</body>
</html>
