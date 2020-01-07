<?php

namespace Styde;

require '../vendor/autoload.php';

use Styde\Armors\SilverArmor;
use Styde\Weapons\BasicSword;
use Styde\Weapons\FireBow;

/////////////////////////////////////////////////////////

$ramm = new Unit('Ramm', new BasicSword());
$silence  = new Unit('Silence', new FireBow());

$ramm->setArmor (new SilverArmor());

$silence->attack($ramm);
$silence->attack($ramm);

$ramm->attack($silence);
