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

<?php
foreach ($_SERVER as $cle => $valeur) {
    echo $cle . ' = ' . $valeur;
    echo '<br />';
}
?>

</body>
</html>
