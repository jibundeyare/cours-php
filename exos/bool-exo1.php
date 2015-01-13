<?php

/*

simplifier les blocs conditionnels `if` imbriqués en utilisant l'opérateur booléen `&&`

*/

define('ZAP_MAX', 3);
define('TICKET_AUCUN', 0);
define('TICKET_NORMAL', 1);
define('TICKET_ZAP', 2);

$billet = TICKET_ZAP;
$stations = 3;

echo "billet: $billet\n";
echo "stations: $stations\n";

if ($billet == TICKET_NORMAL) {
    echo "en règle\n";
} else if ($billet == TICKET_ZAP) {
    if ($stations <= ZAP_MAX) {
        echo "en règle\n";
    } else {
        echo "en fraude\n";
    }
} else {
    echo "en fraude\n";
}

