<?php
if (PHP_VERSION >= '5.6.0') {

    function listeLangages(...$auditeurs) {
        foreach ($auditeurs as $auditeur) {
            echo $auditeur . PHP_EOL;
        }
    }

} else {

    function listeLangages() {
        foreach (func_get_args() as $auditeur) {
            echo $auditeur . PHP_EOL;
        }
    }

}

listeLangages('Php', 'Html', 'Css', 'Javascript', 'Sql');

