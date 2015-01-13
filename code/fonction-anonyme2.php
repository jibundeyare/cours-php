<?php
$direBonjour = function() {
    echo "Bonjour !\n";
};
$direBonjour();

$a = $direBonjour;
$a();

$a = function() {
    echo "Salut !\n";
};
$a();

