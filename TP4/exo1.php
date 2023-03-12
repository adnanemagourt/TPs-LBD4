<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <p>require et require_once ont le même comportement. Ils inclusent tous les deux le code dans le fichier spécifié</p>
    <p>La seule différence étant que pour require_once, un fichier ne peut être inclu qu'une seule fois.</p>
    <p>Ceci peut être utile pour éviter des problèmes comme la redéfinition de variables ou de fonctions ...</p>
    
    <dl><dt>Les variables d'environnement:</dt>
        
    <?php foreach(getenv() as $key => $var){
        echo "<dd>[$key] : $var</dd>";
    } ?>
    </dl>
</body>
</html>