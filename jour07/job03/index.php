<?php
session_start();
    $_SESSION["name"] = $_POST["firstname"];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="firstname">
        <button type="submit" name="send">Envoi</button>
    </form>
    <table border=1 cellspacing=0 cellpadding=10>
        <thead>
            <th scope="col">Prénom</th>
        </thead>
        <br>
        <tbody>
            <?php
                if (isset($_POST["send"])) {
                    for ($i=0; $i < 10; $i++) {
                        echo '<tr><td scope=row>' . $_POST["firstname"] . '</td></tr>';
                    }
                } 
            ?>
        </tbody>
    </table>
</body>
</html>