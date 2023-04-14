<?php
function my_generate_file(string $name){
    fopen("$name.txt", "w+");
    return file_exists("$name.txt");    
}
?>