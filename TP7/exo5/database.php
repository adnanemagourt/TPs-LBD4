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
    echo $result;
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
