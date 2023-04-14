<?php
function check_types(array $my_arr) {
    $everythingOk = true;
    foreach ($my_arr as $key => $value) {
        foreach ($value as $lol) {
            if (gettype($lol) != $key) {
                $everythingOk = false;
            }
        }
    }
    return $everythingOk;
}

?>