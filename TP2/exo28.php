<?php
$tab = [
    "Et123" => [
        "Nom" => "AB", "Prénom" => "AC",
        "Notes" => [
            "module1" => 10,
            "module2" => 15.75,
            "module3" => 16
        ]
    ],
    "Et676" => [
        "Nom" => "BC", "Prénom" => "BD",
        "Notes" => [
            "module1" => 13,
            "module2" => 11.75,
            "module3" => 12.5
        ]
    ],
    "Et998" => [
        "Nom" => "CD", "Prénom" => "CE",
        "Notes" => [
            "module1" => 7,
            "module2" => 10.75,
            "module3" => 10.25
        ]
    ],
    "Et764" => [
        "Nom" => "DE", "Prénom" => "DF",
        "Notes" => [
            "module1" => 12,
            "module2" => 6.75,
            "module3" => 15.25
        ]
    ]
];

$modules = [];

foreach ($tab as $code => $info) {
    foreach ($info["Notes"] as $nomModule => $note) {
        if (isset($modules[$nomModule])) {
            if ((isset($modules[$nomModule]["max"]) && $modules[$nomModule]["max"] < $note) || !isset($modules[$nomModule]["max"])) {
                $modules[$nomModule]["max"] = $note;
            }
            if (isset($modules[$nomModule]["min"]) && $modules[$nomModule]["min"] > $note || !isset($modules[$nomModule]["min"])) {
                $modules[$nomModule]["min"] = $note;
            }
        } else {
            $modules[$nomModule] = ["max" => $note, "min" => $note];
        }
    }
}

?>

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
    <table border>
        <?php
        foreach ($tab as $code => $info) {
            arsort($info["Notes"]);
            echo "<tr><td rowspan=\"2\">" . $code . "<td>Nom<td>Prénom<td>Module max<td>Module min";
            echo "<tr><td>" . $info["Nom"] . "<td>" . $info["Prénom"];
            $count = 0;
            foreach ($info["Notes"] as $nomModule => $note) {
                if ($count == 0) {
                    echo "<td>$nomModule";
                }
                if ($count == sizeof($info["Notes"]) - 1) {
                    echo "<td>$nomModule";
                }
                $count++;
            }
        }
        ?>
    </table>

    <h3>Qst 3</h3>
    <?php
    foreach($modules as $nom => $vals){
        echo "$nom => Max: ".$vals["max"].", Min: ".$vals["min"]."<br>";
    }
    ?>

<h3>Qst 4</h3>
    <table border>
        <?php
        foreach ($tab as $code => $info) {
            echo "<tr><td rowspan=\"2\">" . $code . "<td>Nom<td>Prénom<td>Moyenne<td>Décision";
            echo "<tr><td>" . $info["Nom"] . "<td>" . $info["Prénom"];
            $moyenne = 0;
            foreach ($info["Notes"] as $note) {
                $moyenne += $note;
            }
            $moyenne /= sizeof($info["Notes"]);
            $decision = "Non validé";
            if($moyenne>=10){
                $decision = "Validé";
            }
            echo "<td>".round($moyenne, 2)."<td>$decision";
        }
        ?>
    </table>


</body>

</html>