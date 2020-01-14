<?php

require '../vendor/autoload.php';

use Styde\User;


$user = new User();

$user->setAttributes([
    'first_name' => 'Ambar',
    'last_name'  => 'Quintana',   
]);

$user->nickname ='ambarsquintana';

///////////////////////////////////////////////

echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";    

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}
