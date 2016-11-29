<?php

/*

simplifiez tous les blocs de code `if` de façon à obtenir 3 branchements au lieu de 4

*/

define('ZAP_MAX', 3);
define('TICKET_AUCUN', 0);
define('TICKET_NORMAL', 1);
define('TICKET_ZAP', 2);

$billet = TICKET_ZAP;
$stations = 3;

echo "billet: $billet\n";
echo "stations: $stations\n";

if ($stations <= ZAP_MAX) {
    if ($billet == TICKET_NORMAL || $billet == TICKET_ZAP) {
        echo 'en règle';
        echo '<br />';
    } else if ($billet == TICKET_AUCUN) {
        echo 'en fraude';
        echo '<br />';
    }
} else { // $stations > ZAP_MAX
    if ($billet == TICKET_NORMAL) {
        echo 'en règle';
        echo '<br />';
    } else if ($billet == TICKET_ZAP || $billet == TICKET_AUCUN) {
        echo 'en fraude';
        echo '<br />';
    }
}

