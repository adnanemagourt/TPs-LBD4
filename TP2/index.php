<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 tableaux</title>
</head>
<body>
    <h2>Manipulation tableaux simples</h2>
    <?php
    
    for($i = 1; $i<=6; $i++){
        echo "<a href=\"exo$i.php\">Exercice $i</a><br>";
    }
    ?>
    <h2>Manipulation tableaux associatifs</h2>
    <?php
    for($i = 1; $i<=8; $i++){
        echo "<a href=\"exo2$i.php\">Exercice $i</a><br>";
    }
    ?>
    
</body>
</html>