<?php

$texte = 'PHP IS A SERVER-SIDE SCRIPTING LANGUAGE DESIGNED FOR WEB DEVELOPMENT BUT ALSO USED AS A GENERAL-PURPOSE PROGRAMMING LANGUAGE.';

$texte = str_replace('I', '1', $texte);
$texte = str_replace('E', '3', $texte);
$texte = str_replace('O', '0', $texte);

echo $texte . PHP_EOL;

