
<?php

require_once "prepare.php";
$code = $_GET["code"];
$name = $_GET["name"];
$table = $_GET["add"];
if($table == "city"){
    $add_query = "INSERT INTO '$table' (Name,CountryCode,District,Population) VALUES (?,$code,?,?)";
    $form = ["Name"=>"text","District"=>"text","Population"=>1];
}
if($table="countrylanguage"){
    $add_query = "INSERT INTO '$table' (CountryCode,Language,IsOfficial,Percentage) VALUES ($code, ? , ? , ? )";
    $form = ["Language"=>"text","IsOfficial"=>"select","Percentage"=>0.01];
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
    <h1>Adding new element to country <?php echo $name?></h1>
    <?php
    echo "<h3>Adding "
    ?>
</body>
</html>