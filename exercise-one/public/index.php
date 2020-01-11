<?php

namespace Styde;

require '../vendor/autoload.php';

use Styde\Armors\SilverArmor;
use Styde\Loggers\HtmlLogger;
use Styde\Weapons\FireBow;

/////////////////////////////////////////////////////////

Translator::set([
    'BasicBowAttack'   => ':unit dispara una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'CrossBowAttack'   => ':unit dispara una flecha a :opponent',
    'FireBowAttack'    => ':unit dispara una flecha de fuego a :opponent'
]);

/////////////////////////////////////////////////////////

Log::setLogger(new HtmlLogger);

$ramm = Unit::createSoldier('Ramm')
                ->setArmor(new SilverArmor());

$silence = Unit::createArcher('Silence')
                ->setWeapon(new FireBow());

$silence->attack($ramm);
$silence->attack($ramm);
$ramm->attack($silence);
