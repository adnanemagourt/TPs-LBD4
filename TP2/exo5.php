<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exo5.css">
    <title>Exo 4</title>
</head>
<body>
    <h3>Qst1</h3>
    <div class="colors">
    <h4>Tableau de couleurs</h4>
    <div class="tab">
    <?php
    
    $couleurs = ["Yellow", "Blue", "Red", "Purple", "Black", "Orange", "Cian", "Aqua", "Bisque", "BlueViolet"];
    foreach($couleurs as $color){
        echo "<div style=\"background-color: $color\"></div>";
    }

    ?>
    </div>
    </div>

    <h3>Qst 2</h3>

    <?php
    $resultat = "Introuvable";
    if(isset($_POST["bouton1"]) && in_array($_POST["chercher1"], $couleurs)){
        $resultat = "Couleur existante";
    }
        

    ?>
    <form method="post">
    <label>Couleur à trouver:</label>
    <input type="text" name="chercher1" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["chercher1"])){
            echo $_POST["chercher1"];
        }
    ?>">
    <input type="submit" value="chercher" name="bouton1">
    <br>
    <label>Résultat: </label><?php echo $resultat;?>

    </form>


    <h3>Qst 3</h3>

<?php
$resultat2 = "Introuvable";
if(isset($_POST["bouton2"])){
    $idx = array_search($_POST["chercher2"], $couleurs);
    if(is_int($idx)){
        $resultat2 = "Couleur existante à l'indice: $idx";

    }
}
    

?>
<form method="post">
<label>Couleur à trouver:</label>
<input type="text" name="chercher2" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["chercher2"])){
            echo $_POST["chercher2"];
        }
    ?>">
<input type="submit" value="chercher" name="bouton2">
<br>
<label>Résultat: </label><?php echo $resultat2;?>

</form>



</body>
</html>