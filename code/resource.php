<?php
$handle = fopen('hello.php', 'r');

while (($buffer = fgets($handle)) !== false) {
    echo $buffer;
}

fclose($handle);

