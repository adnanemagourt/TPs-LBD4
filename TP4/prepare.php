<?php

function mysql_connect(){
    mysqli_report(flags: MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli(
        hostname: "localhost",
        username: "root",
        password: "",
        database: "world",
        port: 3306
    );
    if($mysqli->connect_errno){
        echo 'Erreur de connexion à la BdD<br>';
        echo 'Erreur N: '.$mysqli->connect_errno.'<br>';
        echo 'Message: '.$mysqli->connect_error;
        return false;
    }else{
        return $mysqli;
    }
}

?>