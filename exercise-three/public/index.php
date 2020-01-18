<?php

require '../vendor/autoload.php';

use Styde\HtmlNode;


$node = HtmlNode::textarea('Soy un contenido')
            ->name('content')
            ->id('content');


/////////////////////////////////

echo $node;

echo "<br><br>";

echo $node('name');
echo $node('disable');