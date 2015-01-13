<?php

// réponse possible
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 != 0) {
        echo $i;
        echo PHP_EOL;
    }
}

// autre réponse possible
for ($i = 1; $i <= 100; $i++) {
    if (is_int($i / 3)) {
        echo $i;
        echo PHP_EOL;
    }
}

