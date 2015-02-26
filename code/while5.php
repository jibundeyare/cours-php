<?php
// exemple d'utilisation de la boucle `while` pour récupérer l'entrée d'un utilisateur

require 'lib-user-input.php';

$loop = true;

while ($loop) {
    $age = user_input_get_answer('quel âge avez-vous ?');

    if (is_numeric($age)) {
        echo "vous avez $age ans";
        echo PHP_EOL;
        $loop = false;
    } else {
        echo "vous n'avez pas répondu à la question";
        echo PHP_EOL;
    }
}

