<?php
$tab = [
    "WEB" => [

        [
            "Nom" => "HTML",
            "Lien" => "https://www.w3schools.com/html/default.asp",
            "Avis" => 4
        ],
        [
            "Nom" => "JavaScript",
            "Lien" => "https://www.javascript.com/",
            "Avis" => 2
        ],
        [
            "Nom" => "PHP",
            "Lien" => "https://www.php.net/",
            "Avis" => 5
        ],
        [
            "Nom" => "CSS",
            "Lien" => "https://www.w3schools.com/css/",
            "Avis" => 4
        ]
    ],
    "DB" => [
        [
            "Nom" => "MySQL",
            "Lien" => "https://www.mysql.com/",
            "Avis" => 5
        ],
        [
            "Nom" => "DB2",
            "Lien" => " https://www.ibm.com/products/db2",
            "Avis" => 4
        ],
        [
            "Nom" => "Oracle",
            "Lien" => "https://www.oracle.com/",
            "Avis" => 4
        ],
        [
            "Nom" => "PostgreSQL",
            "Lien" => "https://www.postgresql.org/",
            "Avis" => 5
        ]
    ]
];





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

    <form method="post">
        <label for="chercher">Domaine recherché: </label>
        <input type="text" name="chercher"><br>
        <input type="submit" value="Chercher">
    </form>

    <table border>
        <?php

        if (isset($_POST["chercher"]) && key_exists(strtoupper($_POST["chercher"]), $tab)) {
            $domaine = strtoupper($_POST["chercher"]);
            $info = $tab[$domaine];
            echo "<tr><td rowspan=\"" . (sizeof($info) + 1) . "\">$domaine<td>Nom<td>Lien<td>Avis";
            foreach ($info as $site) {
                echo "<tr><td>" . $site["Nom"] . "<td>" . $site["Lien"] . "<td>" .str_repeat("*", $site["Avis"]);
            }
        } else {
            echo "<tr><td>DOMAINE<td>Nom<td>Lien<td>Avis";
        }
        ?>
    </table>
</body>

</html>