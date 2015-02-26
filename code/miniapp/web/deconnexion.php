<?php
// inclusion des librairies
require('../lib/http.php');
require('../lib/security.php');
require('../lib/session.php');

// démarrage de la session
session_safe_start();

// sécurisation de la page
security_filter_user();

// destruction des données liées à l'utilisateur en cours
security_destroy_user();

// destruction de la session en cours
session_destroy();

// redirection de l'utilisateur vers la page de login
http_redirect('connexion.php');

