<?php
require 'lib.php';

$loop = true;

while ($loop) {
    $age = get_user_input('quel âge avez-vous ?');

    if (is_numeric($age)) {
        echo "vous avez $age ans";
        echo PHP_EOL;
        $loop = false;
    } else {
        echo "vous n'avez pas répondu à la question";
        echo PHP_EOL;
    }
}

