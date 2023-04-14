<?php
function convert_number(int $nbr) {
    $temp = strval($nbr);
    $tempArray = str_split($temp);
    var_dump($tempArray);
    foreach ($tempArray as $key) {
        echo (ord($key)) . "\n";
    }
    echo $nbr > 1000 ? "Vive les Pangolins\n" : "";

}

?>