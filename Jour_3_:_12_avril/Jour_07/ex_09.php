<?php
function is_prime($nbr) {
    if (!is_int($nbr)) {
        return null;
    }
    else {
        $count = 0;
        for ($i = 1; $i <= $nbr; $i++) {
            if (($nbr % $i) == 0) {
                $count++;
            }
        }
        if ($count < 3) {
            return true;
        }
        else {
            return false;
        }
    }
}

?>