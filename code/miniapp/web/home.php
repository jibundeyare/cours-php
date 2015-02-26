<?php
// inclusion des librairies
require('../lib/http.php');
require('../lib/security.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// sécurisation de la page
security_filter_user();

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>

<h1>home</h1>

<div>
    Bonjour <?php echo htmlentities($_SESSION['user']['prenom'] . ' ' . $_SESSION['user']['nom']); ?>
</div>

<p>
    <a href="profil.php">profil</a><br />
    <a href="deconnexion.php">déconnexion</a><br />
</p>

</body>
</html>
