<?php
class Dolly
{
    public $animal;
    public $age;
    public $doctor;

    function __construct()
    {
        print $this->animal = $animal;
        print $this->age = $age;
        print $this->doctor = $doctor;
    }
    function __clone()
    {
        $this-> animal = ++self::$animal;
        $this-> age = ++self::$age;
        $this-> doctor = ++self::$doctor;
        print "I will survive! \n";
    }
}
    function clone_object($objet)
{

    }
?>