<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$notes = [11.25, 9.50, 14.75, 8.5, 20, 18.50, 16.25, 14.25, 13.75, 17.50, 19.25, 20];
$moy = 0;
$valid = 0;
$vingt = 0;

echo "<h3>Qst 1</h3><p>";

foreach($notes as $note){
    $moy += $note;
    if($note>10){
        $valid++;
    }
    if($note == 20){
        $vingt++;
    }
    echo "$note ; ";
}
echo "</p>";

$moy /= sizeof($notes);
$moy = round($moy,2);

echo "<h3>Qst 2</h3><p>Moyenne: $moy</p>";

echo "<h3>Qst 3</h3><p>Nombre d'étudiants avec une note >10: $valid</p>";

echo "<h3>Qst 4</h3><p>La note 20 apparaît: $vingt fois</p>";

for($i = 0; $i<sizeof($notes)-1; $i++){
    $min = $notes[$i];
    $idx = $i;
    for($j = $i+1; $j<sizeof($notes); $j++){
        if($min>$notes[$j]){
            $min = $notes[$j];
            $idx = $j;
        }
    }

    $notes[$idx] = $notes[$i];
    $notes[$i] = $min;
}

echo "<h3>Qst 5</h3><p>Tableau trié: ";


foreach($notes as $note){
    $moy += $note;
    if($note>10){
        $valid++;
    }
    if($note == 20){
        $vingt++;
    }
    echo "$note ; ";
}

echo "</p>";

echo "<h3>Qst 5</h3>";

$resultat = "Valeur introuvable";

if(isset($_POST["bouton"])){
    for($i = 0; $i<sizeof($notes); $i++){
        if($_POST["chercher"] == $notes[$i] && $resultat != "Valeur introuvable"){
            $resultat = $resultat." et $i";
            continue;
        }
        if($_POST["chercher"] == $notes[$i]){
            $resultat = "Valeur existante: index $i";
            
        }
    }
}
    

?>
    <form method="post">
    <label>Valeur à trouver:</label>
    <input type="text" name="chercher" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["chercher"])){
            echo $_POST["chercher"];
        }
    ?>">
    <input type="submit" value="chercher" name="bouton">
    <br>
    <label>Résultat: </label><?php echo $resultat;?>

    </form>
    
    
</body>
</html>