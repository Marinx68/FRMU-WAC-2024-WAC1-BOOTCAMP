<?php
class MyAttributes
{
    private $a, $b;
    public function __construct($a, $b)
    {
           $this->a=$a;
           $this->b=$b;
    }

    function getA()
    {
        return $this->a;

    }

    function setA($val)
    {
        $this->a=$val; 
    }

    function getB()
    {
        return $this->b;
    }

    function setB($val)
    {
        $this->b=$val;
    }

    function display()
    {
        echo $this->a." ". $this->b ."\n";
    }
}
?>
