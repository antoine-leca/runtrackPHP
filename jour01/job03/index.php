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
    $cat = ["Decimal", "Hexadecimal", "Octal", "Binaire"];
    $str = "LaPlateforme";
    $numE = 756;
    $numH = 0x352;
    $numO = 0264;
    $numB = 0b110110;
    $myBool = true;
?>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        
        <caption>Variables</caption>
        <thead>
            <th scope="col">Type</th>
            <th scope="col">Nom</th>
            <th scope="col">Valeur</th>
        </thead>
        <tbody>
            <tr>
                <td scope="row"><?php echo $typeStr ?></td>
                <td><?php echo $typeStr ?></td>
                <td><?php $str ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $typeInt ?></td>
                <td><?php echo $cat[0] ?></td>
                <td><?php echo $numE ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $typeInt ?></td>
                <td><?php echo $cat[1] ?></td>
                <td><?php echo $numH ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $typeInt ?></td>
                <td><?php echo $cat[2] ?></td>
                <td><?php echo $numO ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $typeInt ?></td>
                <td><?php echo $cat[3] ?></td>
                <td><?php echo $numB ?></td>
            </tr>
            <tr>
                <td scope="row"><?php echo $typeBool ?></td>
                <td><?php echo $typeBool ?></td>
                <td><?php echo $myBool ?></td>
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>

