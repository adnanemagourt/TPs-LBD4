<?php

function str_arr_v($tab){
    $str = "[";
    foreach($tab as $k => $val){
        $str = $str."$val, ";
    }
    $str = $str."]";
    return $str;
}

?>