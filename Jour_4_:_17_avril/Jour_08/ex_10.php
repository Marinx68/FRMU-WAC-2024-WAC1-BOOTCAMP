<?php
function retournerNombre() {
    static $compteur = 0;
    
    $compteur++;
    
    if ($compteur % 2 == 0) {
      return $compteur / 2;
    } else {
      return null;
    }
  }
?>  