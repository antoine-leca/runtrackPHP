<?php 
    setcookie('nbvisites', 0, time() + 3600);
    if (isset($_POST['reset'])) {
        setcookie('nbvisites', 0, time() + 3600); 
    } 
    elseif (!isset($_COOKIE['nbvisites'])) {
        setcookie('nbvisites', 0, time() + 3600); 
    }
    else {
        setcookie('nbvisites', $_COOKIE['nbvisites'] + 1, time() + 3600); 
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job02</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_COOKIE['nbvisites'];?> </p>
    <form method="post">
        <button type="submit" name="reset">Réinitialiser le compteur</button>
    </form>
</body>
</html>