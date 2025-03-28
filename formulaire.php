<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Document</title>
</head>
<body>

    <h1>Ajouter un Jean</h1>

    <div class="formu">
        <form methode="POST" action="./formulaire.php">
            <div class ="row">
                <div class="element">
                    <input placeholder="Nom" type="text" name="nom"> <br>
                    <input placeholder="Type" type="text" name="type"> <br>
                    <input placeholder="Taille" type="int" name="taille"> <br>
                    <input placeholder="Prix" type="int" name="prix"> <br>
                </div>
            </div>
            <input type="submit" value="Ajouter" class="button"> <br>
        </form>

        <?php
        include ("include/connexion.php");
        include ("include/fonctions.php");

        if (!empty($_POST["nom"])) {

            $nom = $_POST["nom"];
            $type = $_POST["type"];
            $taille = $_POST["taille"];
            $prix = $_POST["prix"];

            //console.log($nom);

            ajout_jean($conn,$nom,$type,$taille,$prix);
        }
        ?>
    </div>   
</body>
</html>