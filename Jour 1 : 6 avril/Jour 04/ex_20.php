<?php
function read_input() {
  while(true) { 
    $line = fgets(STDIN); 
    if($line === false) { 
      return; 
    }
    echo $line; 
    if(trim($line) === 'EOF') { 
      continue; 
    }
  }
}
?>

