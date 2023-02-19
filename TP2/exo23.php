<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Qst 2</h3>
<?php
$tab = ["Ahmed" => 14,
"Joudia" => 19,
"Samir" => 14,
"Yasser" => 14.5,
"Aya" => 12,
"Ilham" => 16,
"Yassine" => 17
];

foreach($tab as $etudiant_nom => $etudiant_note){
    echo "Nom: $etudiant_nom, Note: $etudiant_note <br>";
}

?>

<h3>Qst 3</h3>
    <table border>
        <tr>
            <td>Nom</td><td>Note</td>
        </tr>
        <?php
        foreach($tab as $etudiant_nom => $etudiant_note){
            echo "<tr><td>$etudiant_nom <td>$etudiant_note";
        }
        ?>
    </table>

    <h3>Qst 4</h3>
    <p>L'étudiant ayant la note la plus élevée est: 
        <?php
        $moy = 0;
        $max = 0;
        $min = 20;
        $etdmin = "";
        $etdmax = "";
        foreach($tab as $std => $note){
            if($max < $note){
                $max = $note;
                $etdmax = $std;
            }
            if($min > $note){
                $min = $note;
                $etdmin = $std;
            }
            $moy += $note;
        }
        echo "$etdmax ayant $max";
        ?>
    </p>
    <h3>Qst 5</h3>
    <p>L'étudiant ayant la note la plus petite est: <?php echo "$etdmin ayant $min";?></p>
    <h3>Qst 6</h3>
    <p>La moyenne de la classe est: <?php echo round($moy/sizeof($tab),2);?></p>

</body>
</html>