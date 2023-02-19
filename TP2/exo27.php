<?php
$tab = [
    "Et123" => [
        "Nom" => "AB", "Prénom" => "AC", "Moyenne" => 17
    ],
    "Et676" => [
        "Nom" => "BC", "Prénom" => "BD", "Moyenne" => 12
    ],
    "Et998" => [
        "Nom" => "CD", "Prénom" => "CE", "Moyenne" => 9
    ],
    "Et764" => [
        "Nom" => "DE", "Prénom" => "DF", "Moyenne" => 16.5
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 7</title>
</head>
<body>
    <h3>Qst 1</h3>
    <form method="post">
    <label>Etudiant à trouver:</label>
    <input type="text" name="chercher" value="<?php
        if(isset($_POST["bouton"]) && isset($_POST["chercher"])){
            echo $_POST["chercher"];
        }
    ?>">
    <input type="submit" value="Chercher" name="bouton">
    </form>

    <table border>
        <tr>
            <td rowspan="2"><?php
            if(isset($_POST["chercher"]) && isset($tab[$_POST["chercher"]])){
                echo $_POST["chercher"];
            }
            else{echo "Code";}
            ?></td>
            <td>Nom<td>Prénom<td>Moyenne
        </tr>
        <tr>
            <td><?php
            if(isset($_POST["chercher"]) && isset($tab[$_POST["chercher"]])){
                echo $tab[$_POST["chercher"]]["Nom"];
            }
            ?></td>
            <td><?php
            if(isset($_POST["chercher"]) && isset($tab[$_POST["chercher"]])){
                echo $tab[$_POST["chercher"]]["Prénom"];
            }
            ?></td>
            <td><?php
            if(isset($_POST["chercher"]) && isset($tab[$_POST["chercher"]])){
                echo $tab[$_POST["chercher"]]["Moyenne"];
            }
            ?></td>
        </tr>
    </table>

    <h3>Qst 2</h3>
    <p>Etudiant ayant la note la plus élevée est: 
        <?php
            $max = $tab["Et123"]["Moyenne"];
            $maxname = "Et123";
            foreach($tab as $code => $info){
                if($max < $info["Moyenne"]){
                    $max = $info["Moyenne"];
                    $maxname = $code;
                }
            }
            echo $maxname;
        ?>
    </p>
    <table border>
        <tr>
            <td rowspan="2"><?php
            echo $maxname;
            ?></td>
            <td>Nom<td>Prénom<td>Moyenne
        </tr>
        <tr>
            <td><?php
                echo $tab[$maxname]["Nom"];
            ?></td>
            <td><?php
                echo $tab[$maxname]["Prénom"];
            ?></td>
            <td><?php
                echo $tab[$maxname]["Moyenne"];
            ?></td>
        </tr>
    </table>

    <h3>Qst 3</h3>
    <p>Etudiant ayant validée l'année à note minimale est: 
        <?php
            $max = $tab["Et123"]["Moyenne"];
            $maxname = "Et123";
            foreach($tab as $code => $info){
                if($max >= $info["Moyenne"] && $info["Moyenne"]>=10){
                    $max = $info["Moyenne"];
                    $maxname = $code;
                }
            }
            echo $maxname;
        ?>
    </p>
    <table border>
        <tr>
            <td rowspan="2"><?php
            echo $maxname;
            ?></td>
            <td>Nom<td>Prénom<td>Moyenne
        </tr>
        <tr>
            <td><?php
                echo $tab[$maxname]["Nom"];
            ?></td>
            <td><?php
                echo $tab[$maxname]["Prénom"];
            ?></td>
            <td><?php
                echo $tab[$maxname]["Moyenne"];
            ?></td>
        </tr>
    </table>


    <h3>Qst 4</h3>
    <p>Les étudiants n'ayant pas validé l'année: 
        <?php
            $novalid = [];
            foreach($tab as $code => $info){
                if($info["Moyenne"]<10){
                    $novalid[$code] = $info;
                }
            }
        ?>
    </p>
    <table border>
        <?php
        foreach($novalid as $code => $info){
            echo "<tr><td rowspan=\"2\">".$code."<td>Nom<td>Prénom<td>Moyenne";
            echo "<tr><td>".$info["Nom"]."<td>".$info["Prénom"]."<td>".$info["Moyenne"];
        }
        ?>
    </table>



</body>
</html>