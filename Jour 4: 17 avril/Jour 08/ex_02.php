<?php
function my_rounds($nb1 = null) {
    if(is_float($nb1)){
        $round = round($nb1);
        $ceil = ceil($nb1);
        $floor = floor($nb1);
        echo "Results : $round - $ceil - $floor";
    }
    
}
?>