<?php

require '../vendor/autoload.php';

use Styde\User;
use Styde\LunchBox;


$gordon = new User(['name' => 'Gordon']);

//Daughters
$joanie = new User(['name' => 'Joanie']);
$haley = new User(['name' => 'Haley']);


//House
$lunchBox = new LunchBox(['Sandwich']);
$lunchBox2 = clone($lunchBox);

$joanie->setLunch(clone($lunchBox));
$haley->setLunch(clone($lunchBox2));


//School
$joanie->eat();
$haley->eat();


var_dump($lunchBox, $lunchBox2);