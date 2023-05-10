<?php
$servername = "localhost";
$dbname = "database";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);

    $pseudo = $_POST['pseudo'];

    $query = "SELECT pseudo FROM utilisateurs WHERE pseudo = ?";
    $params = array("$pseudo");
    $stmt = $conn->prepare($query);
    $stmt->execute($params);

    $valid = ($stmt->rowCount() == 0);

    echo $valid;
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}