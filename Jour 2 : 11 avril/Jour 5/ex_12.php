<?php
function temps_execution() {
    $temps_debut = microtime(true);
    $temps_fin = microtime(true);  
    $temps_total = $temps_fin - $temps_debut; 
    return round($temps_total, 7);
}
?>