<?php
function read_input() {
  while($line = fgets(STDIN)) { 
    echo $line;
    if(trim($line) === 'EOF') {
      break; 
    }
  }
}
?>

