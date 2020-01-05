<?php


namespace Styde;

use Warcraft\Armor;


abstract class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;

    public function __construct($name, Armor $armor = null)
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