<?php
function get_angry_bird(int $nbrPiou){
    $bird = "";
    for ($i=1; $i <= $nbrPiou ; $i++){ 
        $bird .= "piou";
      } 
    return "$bird"."\n";
}
?>