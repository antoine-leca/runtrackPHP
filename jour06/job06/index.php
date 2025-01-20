<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire avec Styles</title>
    <?php
        $style = isset($_GET["style"]) ? $_GET["style"] : "style1";
        echo '<link id="stylesheet" rel="stylesheet" href="$style.css">';
    ?>
</head>
<body>
    <form action="" method="get">
        <label for="style">Choisissez un style :</label>
        <select id="style" name="style">
            <option value="style1" <?php echo $style == "style1" ? "selected" : ""; ?>>Style 1</option>
            <option value="style2" <?php echo $style == "style2" ? "selected" : ""; ?>>Style 2</option>
            <option value="style3" <?php echo $style == "style3" ? "selected" : ""; ?>>Style 3</option>
        </select>
        <button type="submit">Appliquer</button>
    </form>
</body>
</html>