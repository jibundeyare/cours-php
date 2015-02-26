<?php
$condition = true;

if ($condition) {
    echo "ce message s'affichera toujours\n";
} else {
    echo "ce message ne s'affichera jamais\n";
}

$condition = false;

if ($condition) {
    echo "ce message ne s'affichera jamais\n";
} else {
    echo "ce message s'affichera toujours\n";
}

