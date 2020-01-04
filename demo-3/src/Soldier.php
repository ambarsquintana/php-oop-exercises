<?php


class Soldier extends Unit
{
    protected $damage = 40;

    public function attack(Unit $opponent)
    {
        show("{$this->name} ataca con un arma a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }
}