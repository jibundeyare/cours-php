<?php

/*

la variable `$nombre_articles` contient une valeur comprise entre 0 et 100
cette variable indique le nombre d'articles en stock

affichez la quantité d'articles puis
avec un bloc de `if` et `else if` :
- affichez le message "article disponible" quand il y a plus de 50 articles
- affichez le message "article très demandé" quand il y a moins 50 articles
- affichez un message "stock faible" quand il y a moins de 10 articles
- affichez un message "non disponible" quand il y a 0 article

*/

$nombre_articles = rand(0, 100);

echo 'nombre_articles = ' . (int) $nombre_articles;
echo '<br />';

if ($nombre_articles == 0) {
    echo 'article non disponible';
    echo '<br />';
} else if ($nombre_articles < 10) {
    echo 'stock faible';
    echo '<br />';
} else if ($nombre_articles < 50) {
    echo 'article très demandé';
    echo '<br />';
} else if ($nombre_articles >= 50) {
    echo 'article disponible';
    echo '<br />';
}

if ($nombre_articles <= 100 && $nombre_articles >= 50) {
    echo "stock disponible";
} elseif ($nombre_articles < 50 && $nombre_articles    >= 10) {
    echo "article très demandé";
} elseif ($nombre_articles < 10 && $nombre_articles    >= 1) {
    echo "stock faible";
} elseif ($nombre_articles == 0) {
    echo "non disponible";
}

