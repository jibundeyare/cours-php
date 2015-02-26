<?php
function user_input_get_answer($prompt, $default_value = '') {
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

function user_input_get_choice($prompt, $choices = array(), $default_value = '') {
    while (true) {
        $user_input = user_input_get_answer($prompt, $default_value);

        if (in_array($user_input, $choices)) {
            return $user_input;
        }
    }
}

function user_input_get_confirmation($prompt, $answers = array('o', 'n'), $default_value = 'n', $confirmation = 'o') {
    if (get_user_choice($prompt, $answers, $default_value) == $confirmation) {
        return true;
    } else {
        return false;
    }
}

