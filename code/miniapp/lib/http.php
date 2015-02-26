<?php
/**
 * redirect
 *
 * redirige vers une url
 *
 * @param string $url l'url vers laquelle rediriger
 * @return void
 */
function http_redirect($url) {
    header('location: ' . $url, true, 302);
    exit();
}

