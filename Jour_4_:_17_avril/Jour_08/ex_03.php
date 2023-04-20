<?php
function my_mail($mail)
{
    $arr_str = [];
    preg_match("/(?<=@).+(?=\.)/", $mail, $arr_str);
    print($arr_str[0]."\n");
}
?> 