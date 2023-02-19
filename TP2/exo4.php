
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
include "func.php";

$tab = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

echo "<h3>Tableau original: </h3><p>".str_arr_v($tab)."</p>";

if(isset($_POST["bouton"])){
    $count = 0;
    for($i = intval($_POST["idx1"]); $i<= (intval($_POST["idx2"]) + intval($_POST["idx1"]))/2; $i++){
        $temp = $tab[$i];
        $tab[$i] = $tab[intval($_POST["idx2"]) - $count];
        $tab[intval($_POST["idx2"]) - $count] = $temp;
        $count++;
    }

}
    

?>
    <form method="post">
    <label>Deux indices:</label>
    <input type="text" name="idx1" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["idx1"])){
            echo $_POST["idx1"];
        }
    ?>">
    <input type="text" name="idx2" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["idx2"])){
            echo $_POST["idx2"];
        }
    ?>"><br>
    <input type="submit" value="Inverser" name="bouton">
    </form>
    <h3>Tableau inversé:</h3>
    <p><?php echo str_arr_v($tab);?></p>
    
</body>
</html>
