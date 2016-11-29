<?php

/*

écrivez un algorithme qui affiche si un voyageur est "en règles" ou "en fraude"
en fonction de son ticket et du nombre de stations parcourues sachant que :

- le ticket normal est utilisable sur toute la ligne
- le ticket zap ne peut être utilisé que pour 3 stations maximum

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
    // complétez par votre code ici
} else { // $stations > ZAP_MAX
    // complétez par votre code ici
}

