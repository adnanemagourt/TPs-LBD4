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
echo "<h3>Qst 2</h3>";
foreach($tab as $categorie => $sites){
    echo "<br>Dans la catégorie $categorie, les sites recommandés sont: ";
    foreach($sites as $site){
        echo $site["Nom"]."(".$site["Avis"]." étoiles), ";
    }
}

echo "<h3>Qst 3</h3>";
foreach($tab as $categorie => $sites){
    echo "<br>Dans la catégorie $categorie, les sites recommandés triés par avis sont: ";
    $temp = [];
    foreach($sites as $site){
        $temp[$site["Nom"]] = $site["Avis"];
    }
    arsort($temp);
    foreach($temp as $nom => $avis){
        echo $nom."($avis étoiles), ";
    }
}


?>