<?php

/*

afficher les nombres de 0 à 100 en toute lettre

résultat attendu :

    0 : zéro
    1 : un
    2 : deux
    3 : trois
    4 : quatre
    5 : cinq
    6 : six
    7 : sept
    8 : huit
    9 : neuf
    10 : dix
    11 : onze
    12 : douze
    13 : treize
    14 : quatorze
    15 : quinze
    16 : seize
    17 : dix-sept
    18 : dix-huit
    19 : dix-neuf
    20 : vingt
    21 : vingt-et-un
    22 : vingt-deux
    23 : vingt-trois
    24 : vingt-quatre
    25 : vingt-cinq
    26 : vingt-six
    27 : vingt-sept
    28 : vingt-huit
    29 : vingt-neuf
    30 : trente
    31 : trente-et-un
    32 : trente-deux
    33 : trente-trois
    34 : trente-quatre
    35 : trente-cinq
    36 : trente-six
    37 : trente-sept
    38 : trente-huit
    39 : trente-neuf
    40 : quarante
    41 : quarante-et-un
    42 : quarante-deux
    43 : quarante-trois
    44 : quarante-quatre
    45 : quarante-cinq
    46 : quarante-six
    47 : quarante-sept
    48 : quarante-huit
    49 : quarante-neuf
    50 : cinquante
    51 : cinquante-et-un
    52 : cinquante-deux
    53 : cinquante-trois
    54 : cinquante-quatre
    55 : cinquante-cinq
    56 : cinquante-six
    57 : cinquante-sept
    58 : cinquante-huit
    59 : cinquante-neuf
    60 : soixante
    61 : soixante-et-un
    62 : soixante-deux
    63 : soixante-trois
    64 : soixante-quatre
    65 : soixante-cinq
    66 : soixante-six
    67 : soixante-sept
    68 : soixante-huit
    69 : soixante-neuf
    70 : soixante-dix
    71 : soixante-et-onze
    72 : soixante-douze
    73 : soixante-treize
    74 : soixante-quatorze
    75 : soixante-quinze
    76 : soixante-seize
    77 : soixante-dix-sept
    78 : soixante-dix-huit
    79 : soixante-dix-neuf
    80 : quantre-vingt
    81 : quantre-vingt-un
    82 : quantre-vingt-deux
    83 : quantre-vingt-trois
    84 : quantre-vingt-quatre
    85 : quantre-vingt-cinq
    86 : quantre-vingt-six
    87 : quantre-vingt-sept
    88 : quantre-vingt-huit
    89 : quantre-vingt-neuf
    90 : quantre-vingt-dix
    91 : quantre-vingt-onze
    92 : quantre-vingt-douze
    93 : quantre-vingt-treize
    94 : quantre-vingt-quatorze
    95 : quantre-vingt-quinze
    96 : quantre-vingt-seize
    97 : quantre-vingt-dix-sept
    98 : quantre-vingt-dix-huit
    99 : quantre-vingt-dix-neuf
    100 : cent

*/

for ($i = 0; $i <= 100; $i++) {

    $reste_des_dizaines = $i % 10;
    $reste_des_centaines = ($i - $reste_des_dizaines) % 100;

    // @dev
    // echo $reste_des_centaines;
    // echo PHP_EOL;
    // echo $reste_des_dizaines;
    // echo PHP_EOL;

    $unite = '';
    $dizaine = '';
    $liaison_dizaine = '';

    if ($reste_des_dizaines == 0) {
        $unite = '';
    } else if ($reste_des_dizaines == 1) {
        $unite = 'un';
    } else if ($reste_des_dizaines == 2) {
        $unite = 'deux';
    } else if ($reste_des_dizaines == 3) {
        $unite = 'trois';
    } else if ($reste_des_dizaines == 4) {
        $unite = 'quatre';
    } else if ($reste_des_dizaines == 5) {
        $unite = 'cinq';
    // @todo il manque 6, 7, 8, et 9, complétez le code
    }

    if ($reste_des_centaines == 0) {
        $dizaine = '';
    } else if ($reste_des_centaines == 10) {
        $dizaine = 'dix';
    } else if ($reste_des_centaines == 20) {
        $dizaine = 'vingt';
    } else if ($reste_des_centaines == 30) {
        $dizaine = 'trente';
    } else if ($reste_des_centaines == 40) {
        $dizaine = 'quarante';
    } else if ($reste_des_centaines == 50) {
        $dizaine = 'cinquante';
    // @todo il manque 60, 70, 80 et 90, complétez le code
    }

    if ($i == 0) {
        $nombre = 'zéro';
    } else if ($i == 100) {
        $nombre = 'cent';
    } else if ($reste_des_dizaines == 0) {
        $nombre = $dizaine;
    } else if ($reste_des_dizaines == 1 && $reste_des_centaines != 80) {
        $liaison_dizaine = '-et-';
        $nombre = $dizaine . $liaison_dizaine . $unite;
    } else {
        $liaison_dizaine = '-';
        $nombre = $dizaine . $liaison_dizaine . $unite;
    }

    // exceptions 10+
    if ($i == 11) {
        $nombre = 'onze';
    } else if ($i == 12) {
        $nombre = 'douze';
    } else if ($i == 13) {
        $nombre = 'treize';
    } else if ($i == 14) {
        $nombre = 'quatorze';
    } else if ($i == 15) {
        $nombre = 'quinze';
    } else if ($i == 16) {
        $nombre = 'seize';
    }

    // exceptions 70+
    if ($i == 71) {
        $nombre = 'soixante-et-onze';
    } else if ($i == 72) {
        $nombre = 'soixante-douze';
    } else if ($i == 73) {
        $nombre = 'soixante-treize';
    } else if ($i == 74) {
        $nombre = 'soixante-quatorze';
    } else if ($i == 75) {
        $nombre = 'soixante-quinze';
    // @todo il manque 76, 77, 78 et 79, complétez le code
    }

    // exceptions 90+
    // @todo il manque 91, 92, 93, 94, 95, 96, 97, 98, 99, inspirez vous du bloc "exceptions 70+" et complétez le code

    echo "$i : $nombre";
    echo PHP_EOL;
}

