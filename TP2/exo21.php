<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 1</title>
</head>
<body>
    <?php
    $ages = [
        "Adnane" => 18,
        "Ayoub" => 25,
        "Ahmed" => 19,
        "Omar" => 46
    ];
    foreach($ages as $nom => $age){
        echo "$nom a $age ans <br>";
    }
    ?>
    <table border>
        <tr>
            <td>Nom</td>
            <td>Age</td>
        </tr>
    <?php
    foreach($ages as $nom => $age){
        echo "<tr>
        <td>$nom</td>
        <td>$age</td>
        </tr>";
    }
    ?>
    </table>
</body>
</html>