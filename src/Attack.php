<?php


namespace Styde;


class Attack
{
    protected $damage;
    protected $magical;
    protected $description = ':unit ataca a :opponent';

    public function __construct($damage, $magical, $description)
    {
        $this->damage = $damage;
        $this->magical = $magical;
        $this->description = $description;
    }

    //Getters Methods
    public function getDescription(Unit $attacker, Unit $opponent)
    {
        return str_replace(
            [':unit', ':opponent'],
            [$attacker->getName(), $opponent->getName()],
            $this->description
        );
    }

    public function getDamage()
    {
        return $this->damage;
    }

    public function isMagical()
    {
        return $this->magical;
    }

    public function isPhysical()
    {
        return ! $this->isMagical();
    }
}
