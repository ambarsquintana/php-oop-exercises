<?php

require '../vendor/autoload.php';

use Styde\User;


$user = new User([
    'name' => 'Derek'
]);

$result = serialize($user);

file_put_contents('../storage/user.txt', $result);
