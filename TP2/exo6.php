<?php

$emails = ["adnane@gmail.com", "yassine@outlook.com", "ahmed@gmail.com", "hassan@um6p.ma", "samir@outlook.fr", "fath@gmail.com", "adnane@um6p.ma"];

$occurences = [];

foreach($emails as $email){
    $domaine = explode("@", $email)[1];
    if(isset($occurences[$domaine])){
        $occurences[$domaine]++;
    }
    else{
        $occurences[$domaine] = 1;
    }

}

foreach($occurences as $domaine => $occ){
    echo "$domaine: ".(round($occ/sizeof($emails)*100, 2))."%<br>";
}

?>