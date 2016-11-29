<?php

/*

simplifiez tous les blocs de code `if` de façon à obtenir 2 branchements au lieu de 3

*/

if (
    (
        $stations <= ZAP_MAX
        && ($billet == TICKET_NORMAL || $billet == TICKET_ZAP)
    )
    || ($stations > ZAP_MAX && $billet == TICKET_NORMAL)
) {
    echo 'en règle';
    echo '<br />';
} else {
    echo 'en fraude';
    echo '<br />';
}

