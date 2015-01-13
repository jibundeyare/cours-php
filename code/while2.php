<?php
$i = 0;
$boucler = true;

while ($boucler) {
    echo $i;
    echo PHP_EOL;

    $i++;

    if ($i == 10) {
        $boucler = false;
    }
}

