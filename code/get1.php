<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<title></title>

<meta name="HandheldFriendly" content="True" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" />

</head>
<body>

<form action="" method="get">
    <input name="titre" type="text" />
    <input type="submit" value="envoyer" />
</form>

<?php
if ($_GET) {
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
}
?>

</body>
</html>
