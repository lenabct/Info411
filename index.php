<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <h1>Jean'ted</h1>

    <a href="formulaire.php" class="lienForm">Ajouter un Jean</a>

    <?php
        include ("include/connexion.php");
        include ("include/fonctions.php");

        affiche_jean($conn);
    ?>
    
</body>
</html>