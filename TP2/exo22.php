<?php

$tab=array("PHP"=>"http://www.php.net","MySQL"=>"http://www.mysql.org","SQLite"=>"http://www.sqlite.org","HTML"=>"https://www.w3schools.com/html/default.asp","CSS"=>"https://www.w3schools.com/css/default.asp");

$key = array_rand($tab);

echo "Site au hasard: $key <br><script>window.open(\"$tab[$key]\")</script>";



?>