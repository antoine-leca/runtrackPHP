<?php

$pdo = new PDO("mysql:host=localhost; dbname=jour08; charset=utf8", "root", "");

$reqEt = "SELECT COUNT(*) AS nb_etudiants FROM etudiants";
$etS = $pdo -> prepare($reqEt);
$etS -> execute();
$tabEt = $etS -> fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellpadding=10 border=1 cellspacing=0 >
        <thead style=text-align:left;>
            <tr>
                <th scope="col">Nombre d'étudiants</th>
        </thead>
        <tbody>
            <?php foreach ($tabEt as $tabEts) { ?>
                <tr>
                    <td scope="row"><?php echo $tabEts['nb_etudiants'] ?></td>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>