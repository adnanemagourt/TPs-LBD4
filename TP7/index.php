<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>TP 7</h1>
    <?php
    for ($i = 1; $i <= 7; $i++ ) {
    ?>
        <a href="./exo<?php echo $i ?>">Exercice <?php echo $i ?></a><br>
    <?php
    }
    ?>
</body>

</html>