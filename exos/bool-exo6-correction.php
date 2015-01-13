<?php

require '../code/lib.php';

list($roues, $pedales, $moteur) = get_random_vehicle();

echo "roues: $roues\n";
echo "pedales: " . boolean_to_string($pedales) . "\n";
echo "moteur: " . boolean_to_string($moteur) . "\n";

if ($roues == 2 && !$pedales && !$moteur) {
    echo "c'est une trottinette ou drésienne\n";
} else if ($roues == 2 && $pedales && !$moteur) {
    echo "c'est un vélo\n";
} else if ($roues == 3 && $pedales && !$moteur) {
    echo "c'est un tricycle\n";
} else if ($roues == 3 && !$pedales && $moteur) {
    echo "c'est un scooter trois roues\n";
} else if ($roues == 2 && $pedales && $moteur) {
    echo "c'est une mobilette\n";
} else if ($roues == 2 && !$pedales && $moteur) {
    echo "c'est une moto ou un scooter\n";
} else if ($roues == 4 && $pedales && !$moteur) {
    echo "c'est une rosalie\n";
} else if ($roues == 4 && !$pedales && $moteur) {
    echo "c'est une voiture\n";
} else {
    echo "c'est quoi ? c'est un ovni ?\n";
}

