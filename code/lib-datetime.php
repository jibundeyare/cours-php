<?php

/**
 * date_create_dmy
 *
 * creates a DateTime object form a date string like '31/12/1999'
 *
 * @param string $date a date string of the format 'dd/mm/yyyy'
 * @return DateTime a DateTime object created from the date string
 */
function date_create_dmy($date) {
    $d = substr($date, 0, 2);
    $m = substr($date, 3, 2);
    $y = substr($date, 6, 4);
    return date_create("$y-$m-$d");
}

/**
 * date_create_mdy
 *
 * creates a DateTime object form a date string like '12/31/1999'
 *
 * @param string $date a date string of the format 'mm/dd/yyyy'
 * @return DateTime a DateTime object created from the date string
 */
function date_create_mdy($date) {
    $d = substr($date, 3, 2);
    $m = substr($date, 0, 2);
    $y = substr($date, 6, 4);
    return date_create("$y-$m-$d");
}

