<?php

require '../vendor/autoload.php';

use Styde\User;
use Styde\LunchBox;
use Styde\Food;


$gordon = new User(['name' => 'Gordon']);

//Daughters
$joanie = new User(['name' => 'Joanie']);

//House
$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich']),
    new Food(['name' => 'Papas']),
    new Food(['name' => 'Jugo de naranja', 'beverage' => true]),
    new Food(['name' => 'Manzana']),
    new Food(['name' => 'Agua', 'beverage' => true])
]);

$joanie->setLunch($lunchBox);

//School
$joanie->eatMeal();
