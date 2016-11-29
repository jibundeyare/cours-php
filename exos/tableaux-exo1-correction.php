<?php

/*
1. créez 4 tableaux contenant chacun une des lignes suivantes :

    ('id', 'name', 'price')

    (100, 'foo', 42.00)

    (101, 'bar', 2.99)

    (102, 'baz', 999.00)

2. ajoutez ces 4 tableaux dans un autre tableau que vous nommerez `products`

3. parcourez le tableau `products` et affichez toutes les valeurs (avec `echo`, non pas avec `var_dump`)

4. prenez soin d'ajouter des sauts de ligne pour améliorer la lisibilité
*/

// déclaration de variables pour chaque produit
$row1 = array('id', 'name', 'price');
$row2 = array(100, 'foo', 42.00);
$row3 = array(101, 'bar', 2.99);
$row4 = array(102, 'baz', 999.00);

// insertion des variables dans le tableau des produits
$products = array(
    $row1,
    $row2,
    $row3,
    $row4,
);

// insertion direct de tableaux dans le tableau des produits
$products = array(
    array('id', 'name', 'price'),
    array(100, 'foo', 42.00),
    array(101, 'bar', 2.99),
    array(102, 'baz', 999.00),
);

// affichage du tableau avec des sauts de ligne
foreach ($products as $product) {
    foreach ($product as $value) {
        echo $value;
        echo ' ';
    }
    echo '<br />';
}

// affichage du tableau avec la balise `<table>`
echo '<table>';
foreach ($products as $product) {
    echo '<tr>';
    foreach ($product as $value) {
        echo '<td>';
        echo $value;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';

