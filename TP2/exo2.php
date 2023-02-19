<?php
include "func.php";

$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre',
'Octobre', 'Novembre', 'Décembre');

echo "<h3>Qst1 - a</h3><p>";

for($i=1; $i<=12; $i++){
    echo "$i - $moisFr[$i] <br>";
}

echo "</p><h3> - b</h3><p>";

foreach($moisFr as $key => $val){
    echo "$key - $val <br>";
}

echo "</p><h3>Qst2-3</h3>";

echo "<p>Ce mois: ".$moisFr[intval(date('m'))]."</p><h3>Qst4</h3><p>";

$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13 => 'Juillet', 'Aout', 'Septembre',
'Octobre', 'Novembre', 'Décembre');

foreach($moisFr as $key => $val){
    echo "$key - $val<br>";
}
echo "</p>";

?>