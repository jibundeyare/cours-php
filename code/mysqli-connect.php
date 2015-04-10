<?php
// @warning changez les codes d'accès pour les adapter à votre configuration

// connexion au serveur mysql
$link = mysqli_connect('server', 'login', 'password', 'database');

// vérification de la connexion
if (!$link) {
    // @dev pendant le développement, on peut afficher l'erreur de connexion
    echo 'erreur de connexion à la base de données mysql : ' . mysqli_connect_error();
    exit();

    // @prod quand le site est en production, on redirige l'utilisateur vers une page d'erreur
    // header('location: erreur-500.php', true, 302);
    // exit();
}

mysqli_set_charset($link, 'utf8');

