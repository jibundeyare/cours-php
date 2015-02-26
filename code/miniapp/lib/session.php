<?php

function session_safe_start() {
    $session_id = session_id();
    if (empty($session_id)) {
        session_start();
    }
}

