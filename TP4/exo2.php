<?php
require_once "prepare.php";
$mysql = mysql_connect();
$list_query = "SELECT Code,Name,Continent,Region FROM country";
$country_list = $mysql->query($list_query);

$ex3 = 2;
if(isset($_GET["ex3"])){
    $ex3 = 3;
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
<style>
    td:hover { cursor: pointer; }
</style>

<body>
    <h1>Exercice <?php echo $ex3?></h1>
    <h2>Countries list</h2>
    <table border>
        <tr>
            <th>Country Code</th>
            <th>Name</th>
            <th>Continent</th>
            <th>Region</th>
        </tr>
        <?php
        foreach($country_list->fetch_all(MYSQLI_NUM) as $val){
            echo "<tr onclick=\"window.location='./exo2_plus.php?code=$val[0]&name=$val[1]&ex3=$ex3';\"><td>".$val[0]."<td>".$val[1]."<td>".$val[2]."<td>".$val[3];
        }
        ?>
    </table>
</body>

</html>