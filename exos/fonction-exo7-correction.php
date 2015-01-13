<?php

function ouiNon($boolean) {
    if ($boolean) {
        return 'oui';
    } else {
        return 'non';
    }
}

echo ouiNon(true);
echo PHP_EOL;

echo ouiNon(false);
echo PHP_EOL;

