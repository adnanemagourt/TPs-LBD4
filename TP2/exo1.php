<?php
include "func.php";
$tableau = [3, 1, 4, 2, 5, 2, 3, 5, 3, 2];
echo "<p>Tableau initial: ".str_arr_v($tableau)." <br>";
sort($tableau);
echo "Tableau trié: ".str_arr_v($tableau)." <br>";
$tableau = array_unique($tableau);
echo "Sans doublons: ".str_arr_v($tableau)." </p>";
?>