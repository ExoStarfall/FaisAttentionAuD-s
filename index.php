<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dice Thrower</title>
</head>

<body>
    <h1>Jette les dés ! </h1>
    <div id="formulaire">
        <form action="dice.php" method="post">
            <label for="désChoisi"> Choisissez le nombre de faces de votre dé</label>
            <input type="text" name="désChoisi" id="désChoisi" required>
            <label for="nbrDés"> Choisissez le nombre de dés</label>
            <input type="text" name="nbrDés" id="nbrDés" required>
            <input class="lancer" type="Submit" value=" Lancer">
        </form>
    </div>
    




</body>

</html>