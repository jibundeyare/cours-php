<?php
$tableau = array(
    array('id' => '1', 'nom' => 'php'),
    array('id' => '2', 'nom' => 'html'),
    array('id' => '3', 'nom' => 'css'),
    array('id' => '4', 'nom' => 'javascript'),
    array('id' => '5', 'nom' => 'sql'),
);

foreach ($tableau as $ligne) {
    foreach ($ligne as $cle => $valeur) {
        echo "$cle : $valeur";
        echo PHP_EOL;
    }
}

