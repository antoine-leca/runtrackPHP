<?php
    if (isset($_POST['name']) && isset($_POST['mail'])) {
        $name = $_POST['name'];
        $mail = $_POST['mail'];
        echo "Nom: $name <br> Mail: $mail";
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">Nom</label>
        <input type="text" name="name" id="name">

        <label for="mail">Mail</label>
        <input type="mail" name="mail" id="mail">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>