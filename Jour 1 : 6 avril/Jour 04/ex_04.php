<?php
function print_until(int $arg1){

  $number = 0;
  if($arg1 < 0){
    echo "Boulet !\n";
    return false;
  }
  else{ 
    print("$number\n");
    while($arg1 > $number){
        $number++;
        echo "$number\n";
    }
    return true;
  }
}
?>
