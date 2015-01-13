<?php

function adresse($numero, $rue, $code_postal, $ville) {
    return $numero . ', ' . $rue . ', ' . $code_postal . ', ' . $ville;
}

echo adresse('8', 'Boulevard Louis XIV', 59000, 'Lille');
echo PHP_EOL;

