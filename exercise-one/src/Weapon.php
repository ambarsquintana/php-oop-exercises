<?php


namespace Styde;


class Weapon
{
    protected $damage = 20;
    protected $magical = false;

    public function createAttack()
    {
        return new Attack($this->damage, $this->magical, $this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('Styde\Weapons\\', '', get_class($this).'Attack');
    }
}
