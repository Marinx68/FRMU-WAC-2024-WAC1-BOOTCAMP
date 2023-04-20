<?php
function write_into_my_file(string $str, string $file, bool $append = false)
{
    if ($append) {
        file_put_contents($file, $str) or die;
    } else {
        $temp = fopen($file, "a") or die;
        fwrite($temp, $str);
    }
}
?>