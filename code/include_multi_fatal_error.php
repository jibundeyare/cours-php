<?php
// inclusion 10 fois du même fichier
for ($i = 0; $i < 10; $i++) {
    // au 2ème tour, cette inclusion génère une erreur : "PHP Fatal error:  Cannot redeclare user_input_get_answer()"
    include 'lib-user-input.php';
}

