<?php

$i = rand(0, 100);

switch (true) {
case $i > 50:
    echo "$i est plus grand que 50";
    echo PHP_EOL;
    break;
case $i < 50:
    echo "$i est plus petit que 50";
    echo PHP_EOL;
    break;
default:
    echo "$i est égal à 50";
    echo PHP_EOL;
}

