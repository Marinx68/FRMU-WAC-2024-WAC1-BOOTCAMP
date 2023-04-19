<?php
abstract class Warrior 
{
    public function attack()
    {
        print "I'll kill you, poor noob !\n";
    }
    abstract public function represent();
    abstract public function shout();

}

class Booba extends Warrior
{
    public function represent()
    {
            print "92\n";
    }
    public function shout()
    {
            print "Bah bien Morray !";
    }
    
}
 class LaFouine extends Warrior
 {
    public function represent()
    {
            print "79\n";
    }
    public function shout()
    {
            print "Je suis proprietaire!";
    }
    
 }
 ?>
