<?php
$texte = 'abcdefgh';

echo substr($texte, 0, 1);
echo PHP_EOL;

echo substr($texte, 0, 4);
echo PHP_EOL;

echo substr($texte, 4, 2);
echo PHP_EOL;

echo '"' . substr($texte, 9, 1) . '"';
echo PHP_EOL;

echo '"' . substr($texte, 0, 100) . '"';
echo PHP_EOL;

echo substr($texte, 0);
echo PHP_EOL;

echo substr($texte, -1, 1);
echo PHP_EOL;

echo substr($texte, -2, 2);
echo PHP_EOL;

