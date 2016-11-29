<?php

function get_user_input($prompt, $default_value = '') {
    if (empty($default_value)) {
        echo $prompt;
        echo PHP_EOL;
    } else {
        echo $prompt . ' [' . $default_value . ']';
        echo PHP_EOL;
    }

    $user_input = trim(fgets(STDIN));

    if (empty($user_input)) {
        $user_input = $default_value;
    }

    return $user_input;
}

function get_user_choice($prompt, $choices = array(), $default_value = '') {
    while (true) {
        $user_input = get_user_input($prompt, $default_value);

        if (in_array($user_input, $choices)) {
            return $user_input;
        }
    }
}

function get_user_confirmation($prompt, $default_value = '') {
    if (get_user_choice($prompt, array('o', 'n'), 'n') == 'o') {
        return true;
    } else {
        return false;
    }
}

function get_random_boolean() {
    return (bool) rand(0, 1);
}

function boolean_to_string($bool) {
    return $bool ? 'true' : 'false';
}

/**
 * get_random_vehicle
 *
 * this function returns an array containing three attributes of a vehicle
 * the first attribute is the number of wheels from 2 to 4 (integer), the second attribute is the presence of pedals (boolean), the third attribute is the presence of an engine (boolean)
 *
 * @access public
 * @return array this array contains three items: array(integer, boolean, boolean)
 */
function get_random_vehicle() {
    $wheels = rand(2, 4);
    $pedals = get_random_boolean();
    $engine = get_random_boolean();
    return array($wheels, $pedals, $engine);
}

