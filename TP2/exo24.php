<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4</title>
</head>
<body>
    <h3>Tableau de multiplication</h3>
    <table border>
        
            <?php for($i=1; $i<=10; $i++){
                echo "<tr>";
                for($j=1; $j<=10; $j++){
                    if($i*$j==1){
                        echo "<td>";
                        continue;
                    }
                    echo "<td width=\"50px\" align=\"center\">".($i*$j);
                }
                echo "</tr>";
                }
                
            ?>
        
    </table>
</body>
</html>