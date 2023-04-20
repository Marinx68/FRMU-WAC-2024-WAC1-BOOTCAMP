<?php
class Character
{ 
    const CLASSE = "Character";

    protected $name, $endurance, $agility, $strength, $mana;
       
    function __construct($arg)
    {
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
?>