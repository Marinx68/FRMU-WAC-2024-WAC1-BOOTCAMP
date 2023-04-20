<?php
    function print_calls() {
        static $call = 1;
        echo "$call";
        $call++;
      }
      
?>