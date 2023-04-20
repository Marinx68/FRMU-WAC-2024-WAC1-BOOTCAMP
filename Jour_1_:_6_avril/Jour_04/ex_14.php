<?php
function goto_is_evil(){
    $cha = 0;
    lbl:
    $cha++;
    echo "wac\n";
    if($cha != 42)
        goto lbl;
}
?>