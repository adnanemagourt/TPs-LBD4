<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exo3-1.php" method="post">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" required>
        <label for="prenom">Prénom: </label>
        <input type="text" name="prenom" required><br>
        <label for="mail">e-mail: </label>
        <input type="email" name="mail" required><br>
        <label for="objet">Objet: </label>
        <input type="text" name="objet" required>
        <br><label for="service">Service: </label>
        <input type="radio" name="service" value="Après-Vente"><label for="serivce">Après-vente</label>
        <input type="radio" name="service" value="Technique"><label for="service">Technique</label>
        <br><textarea name="corps" cols="30" rows="10" required></textarea><br>
        <input type="submit" value="Envoyer">

    </form>
</body>
</html>