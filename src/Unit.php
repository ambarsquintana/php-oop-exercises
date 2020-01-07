<?php


namespace Styde;


abstract class Unit
{
    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;

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
    public function setArmor (Armor $armor = null)
    {
        $this->armor = $armor;
    }

    //Methods
    public function move($direction)
    {
        show("{$this->name} se mueve a {$direction}");
    }

    public function attack(Unit $opponent)
    {
        show($this->weapon->getDescription($this, $opponent));
        $opponent->takeDamage($this->weapon->getDamage());
    }

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
        if ($this->armor) {
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
