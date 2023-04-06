<?php
function calc($operation, $nb1, $nb2){
    if ($operation == "+") {
        return $nb1 + $nb2;
    }
    else if ($operation == "/"){
        return $nb1 / $nb2;
    }
    else if ($operation == "*"){
        return $nb1 * $nb2;
    }
    else if ($operation == "%"){
        return $nb1 % $nb2;
    }
    else if ($operation == "-"){
        return $nb1 - $nb2;
    }
}
?>