<?php
$display = false;
if (isset($_GET["code"])) {
    $name = $_GET["name"];
    $code = $_GET["code"];
    $display = true;
    require_once "prepare.php";
    $mysql = mysql_connect();

    $offcl_lang_query = "SELECT Language,Percentage FROM countrylanguage WHERE CountryCode = '$code' AND IsOfficial = 'T'";
    $unoffcl_lang_query = "SELECT Language,Percentage FROM countrylanguage WHERE CountryCode = '$code' AND IsOfficial = 'F'";
    $cities_query = "SELECT Name,District,Population FROM city WHERE CountryCode = '$code'";

    $offcl_lang = $mysql->query($offcl_lang_query);
    $unoffcl_lang = $mysql->query($unoffcl_lang_query);
    $cities = $mysql->query($cities_query);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exo2.css">
    <title>Document</title>
</head>

<body>
    <h1>Country: <?php echo $name ?></h1>
    <div>
        <div class="elm">
            <h3>Official languages</h3>
            <?php
            if ($offcl_lang && mysqli_num_rows($offcl_lang)!=0) { ?>

                <table border>
                    <tr>
                        <th>Language</th>
                        <th>Percentage</th>
                    </tr>
                    <?php
                    foreach ($offcl_lang->fetch_all(MYSQLI_NUM) as $val) {
                        echo  "<tr><td>$val[0]<td>$val[1]";
                    }
                    ?>
                </table>

            <?php
            } else {
                echo "<p>No official languages</p>";
                if(isset($_GET["ex3"])){
                    echo "<a href='exo3_plus.php?add=countrylanguage&code=$code&name=$name'>Add a new language<a>";
                }
            }
            ?>
            <h3>Unofficial languages</h3>
            <?php
            if ($unoffcl_lang && mysqli_num_rows($unoffcl_lang)!=0) { ?>

                <table border>
                    <tr>
                        <th>Language</th>
                        <th>Percentage</th>
                    </tr>
                    <?php
                    foreach ($unoffcl_lang->fetch_all(MYSQLI_NUM) as $val) {
                        echo  "<tr><td>$val[0]<td>$val[1]";
                    }
                    ?>
                </table>

            <?php
            } else {
                echo "<p>No unofficial languages</p>";
                if(isset($_GET["ex3"])){
                    echo "<a href='exo3_plus.php?add=countrylanguage&code=$code&name=$name'>Add a new language<a>";
                }
            }
            ?>
        </div>
        <div class="elm">
            <h3>Cities</h3>
            <?php
            if ($cities && mysqli_num_rows($cities)!=0) { ?>

                <table border>
                    <tr>
                        <th>Name</th>
                        <th>District</th>
                        <th>Population</th>
                    </tr>
                    <?php
                    foreach ($cities->fetch_all(MYSQLI_NUM) as $val) {
                        echo  "<tr><td>$val[0]<td>$val[1]<td>$val[2]";
                    }
                    ?>
                </table>

            <?php
            } else {
                echo "<p>No cities in this country!</p>";
                if(isset($_GET["ex3"])){
                    echo "<a href='exo3_plus.php?add=city&code=$code&name=$name'>Add a new city<a>";
                }
            }
            ?>

        </div>

    </div>

</body>

</html>