<?php

function show($message)
{
    echo "<p>{$message}</p>";
}

///////////////////////////////////////////////////////// Classes

abstract class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;

    public function __construct($name,Armor $armor = null)
    {
        $this->name = $name;
        $this->setArmor($armor);
    }

    //Getters Methods
    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    //Setters Methods
    public function setArmor (Armor $armor = null){
        $this->armor = $armor;
    }

    //Methods
    public function move($direction)
    {
        show("{$this->name} se mueve a {$direction}");
    }

    abstract public function attack(Unit $opponent);

    public function die()
    {
        show("{$this->name} muere");
        exit();
    }

    public function takeDamage($damage)
    {
        $this->hp -= $this->absorbDamage($damage);
        $this->hp = round($this->hp , 2);

        $this->hp = ($this->hp <0 ) ? 0 : $this->hp;

        show("{$this->name} tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    protected function absorbDamage($damage)
    {
        if ($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}

///////////////////////////////////////////////////////// Inheritance

class Soldier extends Unit
{
    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->name} ataca con un arma a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }
}

class Archer extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} ataca con una flecha a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }
}

///////////////////////////////////////////////////////// Interface and implemented class

interface Armor {
    public function absorbDamage($damage);
}

class BronzeArmor implements Armor {
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

class SilverArmor implements Armor {
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}

/////////////////////////////////////////////////////////

$black = new Soldier('Soldier Black', new BronzeArmor());
$dark  = new Archer ("Archer Dark"  , new BronzeArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor(new SilverArmor());
$black->setArmor(new SilverArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor(new BronzeArmor());
$black->setArmor(new BronzeArmor());

$dark->attack($black);
$black->attack($dark);