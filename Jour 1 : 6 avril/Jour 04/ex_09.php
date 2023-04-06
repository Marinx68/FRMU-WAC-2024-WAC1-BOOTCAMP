<?php
function multiples(int $multi){
    for($i = 0 ; $i < 200000 ; $i += $multi){
        print("$i\n");
    }
}
?>