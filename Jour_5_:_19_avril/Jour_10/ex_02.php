<?php
interface GoodManners
{
    public function say_please();
    public function say_thanks();
    public function say_sorry($name);

    const END_WORDS = ", dirais-je.";
}

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
        public function say_please()
        {
            print "S'il-te-plait";
        }
        public function say_thanks()
        {
            print "Merci";
        }
        public function say_sorry($name)
        {
            print "Mille excuses, $name";
        }
        const END_WORDS = ", dirais-je.";
        
}
 class LaFouine extends Warrior
 {
    public function represent()
    {
            print "79\n";
    }
    public function shout()
    {
            print "Je suis proprietaire !";
    }
}
 ?>