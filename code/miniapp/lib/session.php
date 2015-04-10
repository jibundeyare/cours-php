<?php

function session_safe_start() {
    if (!session_id()) {
        session_start();
    }
}

