<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
    $typeStr = "String";
    $typeInt = "Integer";
    $typeBool = "Boolean";
    $cat = ["Decimal". "Hexadecimal". "Octal". "Binaire"];
    $str = "LaPlateforme";
    $numE = 756;
    $numH = 0x352;
    $numO = 0264;
    $numB = 0b110110;
    $myBool = true;
?>

<body>
    <table>
        <caption>Variables</caption>
        <thead>
            <th scope="col">Type</th>
            <th scope="col">Nom</th>
            <th scope="col">Valeur</th>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php $typeStr ?></td>
                <td><?php $typeStr ?></td>
                <td><?php $str ?></td>
            </tr>
            <tr>
                <td scope="row"><?php $typeInt ?></td>
                <td><?php $cat[0] ?></td>
                <td><?php $numE ?></td>
            </tr>
            <tr>
                <td scope="row"><?php $typeInt ?></td>
                <td><?php $cat[1] ?></td>
                <td><?php $numH ?></td>
            </tr>
            <tr>
                <td scope="row"><?php $typeInt ?></td>
                <td><?php $cat[2] ?></td>
                <td><?php $numO ?></td>
            </tr>
            <tr>
                <td scope="row"><?php $typeInt ?></td>
                <td><?php $cat[3] ?></td>
                <td><?php $numB ?></td>
            </tr>
            <tr>
                <td scope="row"><?php $typeBool ?></td>
                <td><?php $typeBool ?></td>
                <td><?php $myBool ?></td>
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>

