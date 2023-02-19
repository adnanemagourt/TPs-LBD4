<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Message envoyé !</h3>
    <p>Nom: <?php echo $_POST["nom"]." ".$_POST["prenom"];?></p>
    <p>E-mail: <?php echo $_POST["mail"];?></p>
    <p>Service contacté: <?php echo $_POST["service"];?></p>
    <p>Objet: <?php echo $_POST["objet"];?></p>
    <p>Corps de l'e-mail: <br><?php echo $_POST["corps"];?></p>

</body>
</html>