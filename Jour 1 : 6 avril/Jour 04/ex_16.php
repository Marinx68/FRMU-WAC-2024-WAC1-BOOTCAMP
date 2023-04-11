<?php
     function print_double_array($array) {
        foreach ($array as $ligne) {
          foreach ($ligne as $valeur) {
            echo $valeur . "\n";
          }
        }
      }
?>