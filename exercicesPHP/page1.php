<?php
require '../vendor/autoload.php';

$b = "Bonjour";
$c = "à tous";
$ligne = "<hr>";
$d = "vive le php !";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> 
        <?= $b."\n" ?>
        <?= $c ?>
        <?= $ligne ?>
        <?= $d ?>
    </h1>
</body>

</html>