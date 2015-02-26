<?php
// suppression de cookies un par un
setcookie('foo', '', time() - 1);
setcookie('foo', '', time() - 1, '/');

setcookie('baz', '', time() - 1);
setcookie('baz', '', time() - 1, '/');

