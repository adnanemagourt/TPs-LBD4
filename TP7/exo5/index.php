<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
$servername = "localhost";
$dbname = "world";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);


    $query = "SELECT Code,Name FROM country";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Erreur: " . $e->getMessage();
}
?>

<script>
    function show(id) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            document.getElementById(id).innerHTML += ""
        };
        xhr.open("POST", "database.php", true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send("pseudo=" + str);

    }
</script>

<body>
    <h1>Exercice 5</h1>
    <ul>
        <?php
        foreach ($result as $row) {
        ?>
            <li id="<?php echo $row["Code"] ?>" onclick="show(this.id)"><?php echo $row["Name"] ?></li>
        <?php
        }
        ?>
    </ul>
</body>

</html>