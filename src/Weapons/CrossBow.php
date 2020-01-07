<?php


namespace Styde\Weapons;

use Styde\Unit;
use Styde\Weapon;


class CrossBow extends Weapon
{
    protected $damage = 40;

    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return "{$attacker->getName()} dispara una flecha a {$opponent->getName()}";
    }
}