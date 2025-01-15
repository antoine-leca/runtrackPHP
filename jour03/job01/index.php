<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $val = [200, 204, 173, 98, 171, 404, 459];
?>

<table>
    <caption>Pair ou impair ?</caption>
    <thead>
        <tr>
            <th><?php echo $val[0] ?></th>
            <th><?php echo $val[1] ?></th>
            <th><?php echo $val[2] ?></th>
            <th><?php echo $val[3] ?></th>
            <th><?php echo $val[4] ?></th>
            <th><?php echo $val[5] ?></th>
            <th><?php echo $val[6] ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo ($val[0] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[1] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[2] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[3] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[4] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[5] % 2 == 0) ? "paire" : "impaire" ?></td>
            <td><?php echo ($val[6] % 2 == 0) ? "paire" : "impaire" ?></td>
        </tr>
    </tbody>
</table>
    
</body>
</html>