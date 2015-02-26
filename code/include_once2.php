<?php
// inclusion 10 fois du même fichier
for ($i = 0; $i < 10; $i++) {
    // avec le mot clé `include_once`, php s'assure que le fichier n'est inclus qu'une seule fois
    include_once 'lib-user-input.php';
}

