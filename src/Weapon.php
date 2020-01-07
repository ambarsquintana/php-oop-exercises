<?php


namespace Styde;


abstract class Weapon
{
    protected $damage = 20;

    public function getDamage()
    {
        return $this->damage;
    }

    abstract function getDescription(Unit $attacker, Unit $opponent);
}