<?php
class Character
{ 
    const CLASSE = "Character";
    
    protected $name, $endurance, $agility, $strength, $mana;
       
        function __construct($arg){ 
        $this->name = $arg;
        $this->endurance = 50;
        $this->agility = 2;
        $this->strength = 2;
        $this->mana = 2;
        }

        public function getClasse()
        {
            return self::CLASSE;
        }

        function getName()
        {
            return $this->name;
}
        function getEndurance()
            {
            return $this->endurance;
}
        function getAgility()
           {
            return $this->agility;
}
        function getStrength()
            {
            return $this->strength;
}
        function getMana()
            {
            return $this->mana;
}
      
}
      
        
class Paladin extends Character
{  
    
    function __construct($name){
        $endurance = 100;
        $strength = 10;
        $agility = 8;
        $mana = -3;
            print $this->name . ": I'le engrace my name in the history!\n";
}
    function __destruct()
    {
            print $this->name . ": Aarrg I can't believe I'm dead...\n";
}
    function attack()
       {
            print $this->name . ": I'Il crush you with my hammer!\n";
       
    }
}

class Mage extends Character
{
    
    function __construct($name){
        $endurance = 70;
        $strength = 3;
        $agility = 10;
        $mana = 10;
            print $this->name . ": May the gods be with me.\n";
    }

    function __destruct()
    {
            print $this->name . ": By the four gods, I passed away...\n";
}
    function attack()
    {
            print $this->name . ": Feel the power of my magic!\n";

}
}
?>