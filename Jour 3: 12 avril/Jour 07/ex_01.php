<?php
function my_facto($nbr = null) {
    if ($nbr != null && $nbr > 0 && is_int($nbr)) {
        $result = $nbr;
        for ($i = 1; $i < $nbr; ++$i) {
            $result *= $i;
        }
        return $result;
    }
    elseif ($nbr === 0) {
        return 1;
    }
    else {
        return null;
    }
}

?>