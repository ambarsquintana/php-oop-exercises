<?php

namespace Styde;

require '../vendor/autoload.php';

use Styde\Armors\SilverArmor;
use Styde\Weapons\BasicSword;
use Styde\Weapons\FireBow;

/////////////////////////////////////////////////////////

Translator::set([
    'BasicBowAttack'   => ':unit dispara una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack'   => ':unit dispara una flecha a :opponent',
    'FireBowAttack'    => ':unit dispara una flecha de fuego a :opponent'
]);

/////////////////////////////////////////////////////////

$ramm = new Unit('Ramm', new BasicSword());
$silence  = new Unit('Silence', new FireBow());

$ramm->setArmor (new SilverArmor());

$silence->attack($ramm);
$silence->attack($ramm);

$ramm->attack($silence);
