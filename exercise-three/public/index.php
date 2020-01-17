<?php

require '../vendor/autoload.php';

use Styde\HtmlNode;

$node = new HtmlNode(
        'input',
        null,
        [
            'name' => 'first_name',
            'type' => 'text'
        ]
    );

$node2 = new HtmlNode(
    'textarea',
    'Soy un contenido',
    [
        'name' => 'content'
    ]
);

echo $node->render();
echo "<br><br>";
echo $node2->render();