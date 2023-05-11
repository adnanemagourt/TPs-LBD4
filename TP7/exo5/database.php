<?php
$servername = "localhost";
$dbname = "world";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

    $id = $_POST["id"];

    $query = "SELECT * FROM country WHERE Code = ?";
    $stmt = $conn->prepare($query);
    $params = [$id];
    $stmt->execute($params);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $str = "<p>";
    $str .= "Continent: " . $result[0]["Continent"] . "<br>
        Region: " . $result[0]["Region"] . "<br>
        Surface Area: " . $result[0]["SurfaceArea"] . "	<br>
        IndepYear :" . $result[0]["IndepYear"] . "	<br>
        Population :" . $result[0]["Population"] . "	<br>
        LifeExpectancy :" . $result[0]["LifeExpectancy"] . "	<br>
        GNP :" . $result[0]["GNP"] . "	<br>
        GNPOld :" . $result[0]["GNPOld"] . "	<br>
        LocalName :" . $result[0]["LocalName"] . "	<br>
        GovernmentForm :" . $result[0]["GovernmentForm"] . "	<br>
        HeadOfState :" . $result[0]["HeadOfState"];
    $str .= "</p>";
    echo $str;
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
