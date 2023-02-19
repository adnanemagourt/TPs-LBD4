<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function oper(elm){
            operation = document.getElementById("operation");
            if(elm.id == "plus"){
                operation.value = "+";
            }
            if(elm.id == "moins"){
                operation.value = "-";
            }
            if(elm.id == "fois"){
                operation.value = "*";
            }
            if(elm.id == "divise"){
                operation.value = "/";
            }

        }
    </script>
</head>
<body>

    <?php
    $resultat = 0;
    if(isset($_POST["nbr1"])){
        $operation = $_POST["operation"];
        $nbr1 = floatval($_POST["nbr1"]);
        $nbr2 = floatval($_POST["nbr2"]);
        if($operation == "+"){
            $resultat = $nbr1 + $nbr2;
        }
        if($operation == "-"){
            $resultat = $nbr1 - $nbr2;
        }
        if($operation == "*"){
            $resultat = $nbr1 * $nbr2;
        }
        if($operation == "/"){
            $resultat = $nbr1 / $nbr2;
        }

    }
    ?>
    <form method="post">
        <input type="text" name="nbr1" value="<?php echo $resultat;?>">
        <input type="text" readonly name="operation" id="operation">
        <input type="text" name="nbr2">
        <input type="submit" value="=">
        <input type="text" readonly value="<?php echo $resultat;?>">
        <br>
        <button type="button" id="plus" onclick="oper(plus)">+</button>
        <button type="button" id="moins" onclick="oper(moins)">-</button><br>
        <button type="button" id="fois" onclick="oper(fois)">*</button>
        <button type="button" id="divise" onclick="oper(divise)">/</button>


    </form>
</body>
</html>