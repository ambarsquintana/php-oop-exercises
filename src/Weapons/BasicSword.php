<?php


namespace Styde\Weapons;

use Styde\Unit;
use Styde\Weapon;


class BasicSword extends Weapon
{
    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} ataca con la espada a {$opponent->getName()}";
    }
}