<?php
class MyAttribute
{

    function __construct($attr)
    {
        $this->attr=$attr;
    }

    function display()
    {
        echo $this->attr."\n";
    }
}
?>