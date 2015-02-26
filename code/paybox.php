<?php
// code adapté depuis la source:
//  Exemple d'implémentation - Paybox
//  http://www1.paybox.com/espace-integrateur-documentation/les-solutions-paybox-direct-et-paybox-direct-plus/exemple-dimplementation/
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Test Paybox direct</title>
</head>
<body>
<h1>Test Paybox direct</h1>
<?php

session_start();

if (!isset($_SESSION['NUMQUESTION'])) {
    // NUMQUESTION doit être compris entre 1 et 2147483647
    $_SESSION['NUMQUESTION'] = '1000000000';
} else {
    $_SESSION['NUMQUESTION']++;
}

// initialisation de la session https
$curl = curl_init('https://preprod-ppps.paybox.com/PPPS.php');

// Précise que la réponse est souhaitée
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Présise que le session est nouvelle
curl_setopt($curl, CURLOPT_COOKIESESSION, true);

$postfields = array(
    'VERSION'       => '00104',
    'TYPE'          => '00001',
    'SITE'          => '1999888',
    'RANG'          => '32',
    'IDENTIFIANT'   => '107904482',
    'CLE'           => '1999888I',

    'NUMQUESTION'   => $_SESSION['NUMQUESTION'],
    'MONTANT'       => '1000',
    'DEVISE'        => '978',
    'REFERENCE'     => 'Hello World',

    'PORTEUR'       => '1111222233334444',
    'DATEVAL'       => '1215',
    'CVV'           => '123',

    'DATEQ'         => date('dmY'),

    // 'ERRORCODETEST' => '14', // Numéro de porteur invalide
    // 'ERRORCODETEST' => '17', // Annulation client
    // 'ERRORCODETEST' => '51', // Provision insuffisante ou crédit dépassé
    // 'ERRORCODETEST' => '54', // Date de validité de la carte dépassée
);

// Crée la chaine url encodée selon la RFC1738 à partir du tableau de paramètres séparés par le caractère &
$trame = http_build_query($postfields, '', '&');

// Présise le type de requête HTTP : POST
curl_setopt($curl, CURLOPT_POST, true);

// Présise le Content-Type
curl_setopt($curl,CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

// Ajoute les paramètres
curl_setopt($curl, CURLOPT_POSTFIELDS, $trame);

// Envoi de la requête et obtention de la réponse
$raw_response = curl_exec($curl);

$response = array();
parse_str($raw_response, $response);

echo "<pre>";
echo "Réponse Paybox direct pour la demande 'autorize' ";
var_dump($raw_response);
var_dump($response);
if ($response['CODEREPONSE'] == '00000') {
    echo 'Demande traitée avec succès';
} else {
    echo 'Échec de la demande';
}
echo "</pre>";

// fermeture de la session
curl_close($curl);

?>
</body>
</html>

