<?php

// inclusion de la librairie `lib-datetime.php`
require('lib-datetime.php');

// affectation du fuseau horaire
date_default_timezone_set('europe/paris');

// création d'objet de type DateTime
$date1 = date_create_dmy('31/12/2015');
$date2 = date_create_dmy('01/11/2014');

// comparaison de dates
if ($date1 < $date2) {
    echo 'date1 est antérieure à date2';
    echo "\n";
} else if ($date1 > $date2) {
    echo 'date1 est ultérieure à date2';
    echo "\n";
} else {
    echo 'date1 et date2 sont égales';
    echo "\n";
}

// affichage de l'interval (durée) entre deux dates
$interval = date_diff($date1, $date2);
echo 'la différence entre les deux dates est de ' . $interval->format('%r%a') . ' jours';
echo "\n";

// création d'un objet DateTime à la date du jour puis affichage
// pour les code acceptés par la méthode `format()`, voir http://php.net/manual/en/function.date.php#refsect1-function.date-parameters
$now = date_create();
echo 'nous sommes le ' . $now->format('d/m/Y');
echo "\n";

echo 'il est ' . $now->format('H:i:s');
echo "\n";

