<?php

namespace Styde;

use Styde\Armors\MissingArmor;
use Styde\Weapons\BasicBow;
use Styde\Weapons\BasicSword;


class Unit
{
    const MAX_DAMAGE = 100;

    protected $hp = 40;
    protected $name;
    protected $armor;
    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->setArmor(new MissingArmor());
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
    public function setArmor (Armor $armor)
    {
        $this->armor = $armor;
        return $this;
    }

    public function setWeapon (Weapon $weapon)
    {
        $this->weapon = $weapon;
        return $this;
    }

    public function setHp ($damage)
    {
        if ($damage > static::MAX_DAMAGE){
            $damage = static::MAX_DAMAGE;
        }

        $this->hp -= $damage;
        $this->hp = round($this->hp , 2);
        $this->hp = ($this->hp <0 ) ? 0 : $this->hp;
    }

    //Methods
    public function move($direction)
    {
        Log::info("{$this->name} se mueve a {$direction}");
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();
        Log::info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {        
        $this->setHp($this->armor->absorbDamage($attack));
        Log::info("{$this->name} tiene {$this->hp} puntos de vida");

        if ($this->hp <= 0) {
            $this->die();
        }
    }

    public function die()
    {
        Log::info("{$this->name} muere");
        exit();
    }

    //Static methods
    public static function createSoldier($name)
    {
        return new Unit($name, new BasicSword());
    }

    public static function createArcher($name)
    {
        return new Unit($name, new BasicBow());
    }
}
