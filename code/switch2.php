<?php
$nombre = 5;

switch (true) {
case $nombre > 5:
    echo "le nombre est plus grand que 5\n";
    break;
case $nombre < 5:
    echo "le nombre est plus petit que 5\n";
    break;
default:
    echo "le nombre est égal à 5\n";
}

