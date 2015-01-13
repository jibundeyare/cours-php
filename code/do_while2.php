<?php
$i = 0;
$boucler = true;

do {
    echo $i;
    echo PHP_EOL;

    $i++;

    if ($i == 10) {
        $boucler = false;
    }
} while ($boucler);

