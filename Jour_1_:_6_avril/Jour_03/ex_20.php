<?php
function spupof(string $alphabet){
$alphabet = strtolower($alphabet);
$alphabet = strtr($alphabet, "abcdefghijklmnopqrstuvwxyz", "bcdefghijklmnopqrstuvwxyza");
print("$alphabet\n");
}
echo "abcde";
?>
