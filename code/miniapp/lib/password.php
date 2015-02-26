<?php
/**
 * password_generate_random_string
 *
 * source:
 *  Generating a random password in php - Stack Overflow
 *  http://stackoverflow.com/questions/6101956/generating-a-random-password-in-php#answer-6101969
 *
 * generates a random password
 *
 * @param int $password_length OPTIONAL desired length of the generated password, defaults to 12
 * @return string random password
 */
function password_generate_random_string($password_length = 12) {
    $symbols = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $password = array();
    $symbols_count = strlen($symbols) - 1;

    for ($i = 0; $i < $password_length; $i++) {
        $n = rand(0, $symbols_count);
        $password[] = $symbols[$n];
    }

    return implode($password);
}

