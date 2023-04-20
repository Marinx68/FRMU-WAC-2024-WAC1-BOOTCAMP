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
        $this->pony= "Don't worry, I'm a pony !\n";
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
    function __call($para1, $para2)
    {
        print "I don't know what to do...\n";
    }

    function __destruct()
    {
            print "I'm a dead pony.\n";
    }

    function __toString()
    {
        return $this->pony;

    }
    public function speak()
    {
        print $this->speak(). "Hiii hiii hiiii\n";
        
    }
}
?>