<?php
class Pony
{
    public $name;
    public $gender;
    public $color;

    function __construct($name, $gender, $color)
    {
        $this->name=$name;
        $this->gender=$gender;
        $this->color=$color;
    }

    function setName($name)
    {
        print $this->name;
    }
    function setGender($gender)
    {
        print $this->gender;
    }
    function setColor($color)
    {
        print $this->color;
    }

    function __destruct()
    {
            print "I'm a dead pony.\n";
    }
    function __call($par1, $para2)
    {
        print "Don't worry, I'm a pony!\n";
        
    }
}
?>