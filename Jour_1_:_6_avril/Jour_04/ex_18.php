<?php
function return_calls() {
  static $counter = 0;
  $counter++;
  return $counter * 3;
}
?>

