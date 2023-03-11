<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TP4</h1>
    <h3>Part 1 : Application directe des notions</h3>
    <?php
    for($i=1;$i<=5;$i++){
        echo "<a href=\"./exo$i.php\">Exercice $i</a><br>";
    }
    ?>
    <h3>Part 2 : Exercices de développement</h3>
    <?php
    for($i=1;$i<=6;$i++){
        echo "<a href=\"./exo2$i.php\">Exercice $i</a><br>";
    }
    ?>
</body>
</html>