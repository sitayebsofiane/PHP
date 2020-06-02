<?php
require '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border: medium solid #000000;
            width: 50%;
        }

        td,
        th {
            border: thin solid #6495ed;
            width: 50%;
        }
    </style>
</head>

<body>
    <table summary="exemple de structure d'un tableau de données 2 lignes, 2 colonnes">
        <caption>Tableau de données</caption>
        <?php for($i=1;$i<7;$i+=2){?>
        <tr>
            <th>bonjour<?= $i?></th>
            <th>bonjour<?= $i+1?></th>
        </tr>
        <?php }?>
    </table>
</body>

</html>