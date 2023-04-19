<?php
class Pony
{
    private $name;
    private $gender;
    private $color;

    function __construct($name, $gender, $color)
    {
        $this->name=$name;
        $this->gender=$gender;
        $this->color=$color;
        $this->pony=$pony= "Don't worry, I'm a pony !\n";
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
        print $this->speak. "Hiii hiii hiiii\n";
        
    }
    function __set($para1, $valeur)
    {
        switch ($para1) {
            case 'name':
                print "Ce n'est pas bien de setter un attribut qui est privé !\n";
                $this->name = $valeur;
                break;
            
            case 'gender':
                print "Ce n'est pas bien de setter un attribut qui est privé !\n";
                return $this->gender = $valeur;
                break;

            case 'color':
                print "Ce n'est pas bien de setter un attribut qui est privé !\n";
                return $this->color = $valeur;
                break;
                
            default:
                print"Il n'y a pas d'attribut : ". $valeur.".\n";
                break;
        }
        print "Ce n'est pas bien de setter un attribut qui est privé\n!";
        $this->$para1 = $valeur;
    }
    function __get($para1)
    {
        switch ($para1) {
            case 'name':
                print "Ce n'est pas bien de getter un attribut qui est privé\n";
                return $this->name;
                break;
            
            case 'gender':
                print "Ce n'est pas bien de getter un attribut qui est privé\n";
                return $this->gender;
                break;

            case 'color':
                print "Ce n'est pas bien de getter un attribut qui est privé\n";
                return $this->color;
                break;
                
            default:
                print"Il n'y a pas d'attribut :". $para1.".;\n";
                break;
        }
        return $para1;
    }
}
?>