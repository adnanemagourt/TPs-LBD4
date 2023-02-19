<?php
$capitales=[
    "Maroc" => "Rabat" , "Allemagne" => "Berlin" , "Serbie" => "Belgrade" , "Brésil" => "Brasilia" , "Slovaquie" => "Bratislava" , "Italie" => "Rome" , "Venezuela" => "Caracas" , "Moldavie" => "Chisinau" , "Guyana" => "Georgetown" , "ViêtNam" => "Hanoï" ,"Zimbabwe" => "Harare" , "Cuba" => "La Havane" , "Pays-Bas" => "La Haye" , "Finlande" => "Helsinki" ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5</title>
</head>
<body>
    <h3>Qst 1</h3>
    <?php
    
    foreach($capitales as $pays => $capitale){
        echo "$pays: $capitale <br>";
    }
    ?>
    <h3>Qst 2</h3>
    <table border>
        <tr>
            <td>Pays<td>Capitale
        </tr>
        <?php
        foreach($capitales as $pays => $capitale){
            echo "<tr><td>$pays<td>$capitale";
        }
        ?>
    </table>

    <h3>Qst 3</h3>

    

    <form method="post">
    <label>Pays:</label>
    <input type="text" name="chercher" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["chercher"])){
            echo $_POST["chercher"];
        }
    ?>">
    <label>Capitale:</label>
    <input type="text" disabled value="<?php
        if(isset($_POST["bouton"]) && isset($capitales[$_POST["chercher"]])){
            echo $capitales[$_POST["chercher"]];
        }
        else{
            echo "Introuvable";
        }
    ?>"><br>
    <input type="submit" value="Chercher la capitale" name="bouton">
    </form>

</body>
</html>