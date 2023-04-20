<?php
function my_facto_rec($nbr = null) {
    if ($nbr != null && $nbr > 0 && is_int($nbr)) {
        return $nbr * (my_facto_rec($nbr - 1));
    }
    elseif ($nbr === 0) {
        return 1;
    }
    else {
        return null;
    }
}

?>