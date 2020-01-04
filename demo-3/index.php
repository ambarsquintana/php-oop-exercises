<?php

require 'src/helpers.php';

spl_autoload_register( function ($class){
    require "src/$class.php";
});


/////////////////////////////////////////////////////////

$black = new Soldier('Soldier Black', new BronzeArmor());
$dark  = new Archer ('Archer Dark'  , new BronzeArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor(new SilverArmor());
$black->setArmor(new SilverArmor());

$dark->attack($black);
$black->attack($dark);

echo "<hr>";

$dark->setArmor(new BronzeArmor());
$black->setArmor(new BronzeArmor());

$dark->attack($black);
$black->attack($dark);