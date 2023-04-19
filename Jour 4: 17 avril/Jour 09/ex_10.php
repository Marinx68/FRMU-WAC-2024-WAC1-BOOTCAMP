<?php

function class_loader($cls)
{
    include $cls.".class.php";
}

spl_autoload_register('class_loader');
?>