<?php

function security_filter_user($key = 'user', $url = 'connexion.php') {
    if (!isset($_SESSION[$key]) || empty($_SESSION[$key])) {
        http_redirect($url);
    }
}

function security_destroy_user($key = 'user') {
    unset($_SESSION[$key]);
}

function security_set_user($data, $key = 'user') {
    $_SESSION[$key] = $data;
}

function security_user_is_set($key = 'user') {
    return isset($_SESSION[$key]);
}

