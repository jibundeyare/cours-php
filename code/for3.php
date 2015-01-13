<?php
$tableau = array(
    array('1', 'php'),
    array('2', 'html'),
    array('3', 'css'),
    array('4', 'javascript'),
    array('5', 'sql'),
);

for ($i = 0; $i < count($tableau); $i++) {
    $ligne = $tableau[$i];

    for ($j  = 0; $j < count($ligne); $j++) {
        echo $ligne[$j];
        echo PHP_EOL;
    }
}

