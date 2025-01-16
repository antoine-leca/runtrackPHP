<?php
    $numberOfArguments = 0;
    foreach ($_GET as $key => $value) {
        $numberOfArguments++;
    }
    echo "Il y a $numberOfArguments arguments dans l'URL.<br>";
    
    if (isset($_GET['name']) && isset($_GET['mail'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        echo "Nom: $name <br> Mail: $mail";
    }
    var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <label for="name">Nom<br></label>
        <input type="text" name="name" id="name">

        <label for="mail">Mail<br></label>
        <input type="mail" name="mail" id="mail">

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>