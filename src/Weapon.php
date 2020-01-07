<?php


namespace Styde;


class Weapon
{
    protected $damage = 20;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->description);
    }
}
