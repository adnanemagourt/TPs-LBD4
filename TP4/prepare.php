<?php

define("MYSQL_HOST", "localhost");
define("MYSQL_USER", "root");
define("MYSQL_PASSWORD","");
define("MYSQL_DB_NAME","world");
define("MYSQL_PORT",3306);

function mysql_connect(){
    mysqli_report(flags: MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $mysqli = new mysqli(
        hostname: MYSQL_HOST,
        username: MYSQL_USER,
        password: MYSQL_PASSWORD,
        database: MYSQL_DB_NAME,
        port: MYSQL_PORT
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