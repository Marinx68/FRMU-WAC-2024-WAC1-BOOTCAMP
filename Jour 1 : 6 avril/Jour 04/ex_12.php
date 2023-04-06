<?php
function is_similar ($var1, $var2){

    if($var1 === $var2){
        print("Same type and value.\n");
    }

    elseif(gettype($var1) == gettype($var2)){
        print("Same type.\n");
    }

    elseif ($var1 == $var2) {
        print("Same value.\n");
    }
}
   ?>