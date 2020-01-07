<?php

namespace Styde;

require '../vendor/autoload.php';

use Styde\Armors\BronzeArmor;
use Styde\Weapons\BasicSword;
use Styde\Weapons\CrossBow;

/////////////////////////////////////////////////////////

$ramm = new Soldier('Ramm', new BasicSword());
$silence  = new Archer ('Silence', new CrossBow);

$ramm->setArmor (new BronzeArmor());

$silence->attack($ramm);
$silence->attack($ramm);

$ramm->attack($silence);
