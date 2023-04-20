<?php
function aff_array(array $array1){
    foreach ($array1 as $value) {
        print("$value\n");
    }

    $count_elem = count($array1);
    
    return $count_elem;
}