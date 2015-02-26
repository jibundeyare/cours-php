<?php
// ce script montre comment afficher les erreurs d'un script qui n'affiche qu'une page blanche

// afficher toutes les erreurs
// on combine les deux méthode pour être sûr que les erreurs seront affichées quelque soit la configuration du serveur web
error_reporting(-1);
ini_set("display_errors", -1);

// inclusion du fichier contenant un bug mais qui affiche juste une page blanche
include("bug.php");

