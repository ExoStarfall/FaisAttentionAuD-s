<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dice Thrower</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php // On défin nos variables a partir du formulaire //
    $désChoisi = $_POST["désChoisi"] ?? false; // Nbr de faces // 
    $nbrDés = $_POST["nbrDés"] ?? false;    //Nbr de dés // 

    // On affiche les paramètres //
    echo ("<p> Vous avez choisi des dés à $désChoisi faces </p>");

    // PHP exécute l'instruction tant que l'expression de la boucle est considérée comme TRUE //
    while ($nbrDés >= 1) {
    $rand = random_int(1,$désChoisi); // On définit la fonction random, avec random_int pour sécuriser//
    echo ("<p> Le resultat du dé $nbrDés est : $rand <br> <p/>");
    $nbrDés--; // On décrémente, renvoie la variable et la décrémente de 1 //
    }
    echo ('</div>');
    $nbrDés = $_POST["nbrDés"] ?? false; // Redéfinis la fonction vu qu'on l'a décrémenté plus haut//

    echo ("<a href='index.php'><button class='btnacc'>Accueil</button></a>"); // Affiche le bouton Accueil //
     // On relance les dés via un formulaire, Ouais c'est sale //
    echo ("<form action='dice.php' method='post'>        
      <input id='nbrDés' name='nbrDés' type='hidden' value='$nbrDés'>
      <input id='désChoisi' name='désChoisi' type='hidden' value='$désChoisi'> 
      <input class='btnrel' type='submit' value='Relancer'") // Affiche le bouton Relancer //
?>                       

</body>
</html>