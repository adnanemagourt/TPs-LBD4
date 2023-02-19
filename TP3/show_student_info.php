<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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


    ?>
</head>

<body>

    <table border>
        <?php

        if (isset($_POST["id"]) && key_exists($_POST["id"], $tab)) {
            $code = $_POST["id"];
            $info = $tab[$code];
            echo "<tr><td rowspan=\"2\">" . $code . "<td>Nom<td>Prénom<td colspan=\"" . (sizeof($info["Notes"]) * 2) . "\">Notes";

            echo "<td>Moyenne<td>Décision";
            echo "<tr><td>" . $info["Nom"] . "<td>" . $info["Prénom"];
            $moyenne = 0;

            foreach ($info["Notes"] as $module => $note) {
                echo "<td>$module<td>$note";
                $moyenne += $note;
            }
            $moyenne /= sizeof($info["Notes"]);
            $decision = "Non validé";
            if ($moyenne >= 10) {
                $decision = "Validé";
            }
            echo "<td>" . round($moyenne, 2) . "<td>$decision";
        } else {

            foreach ($tab as $code => $info) {
                echo "<tr><td rowspan=\"2\">" . $code . "<td>Nom<td>Prénom<td colspan=\"" . (sizeof($info["Notes"]) * 2) . "\">Notes";

                echo "<td>Moyenne<td>Décision";
                echo "<tr><td>" . $info["Nom"] . "<td>" . $info["Prénom"];
                $moyenne = 0;

                foreach ($info["Notes"] as $module => $note) {
                    echo "<td>$module<td>$note";
                    $moyenne += $note;
                }
                $moyenne /= sizeof($info["Notes"]);
                $decision = "Non validé";
                if ($moyenne >= 10) {
                    $decision = "Validé";
                }
                echo "<td>" . round($moyenne, 2) . "<td>$decision";
            }
        }
        ?>
    </table>


</body>

</html>