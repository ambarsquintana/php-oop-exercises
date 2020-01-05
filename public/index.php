<?php

namespace Styde;

require '../vendor/autoload.php';

use Styde\Armors\SilverArmor;
use Styde\Armors\BronzeArmor;

/////////////////////////////////////////////////////////

$black = new Soldier('Soldier Black', new BronzeArmor());
$dark  = new Archer ('Archer Dark'  , new BronzeArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor (new SilverArmor());
$black->setArmor(new SilverArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor (new BronzeArmor());
$black->setArmor(new BronzeArmor());

$dark->attack($black);
$black->attack($dark);
