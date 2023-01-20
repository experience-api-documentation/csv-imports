<?php

require(__DIR__ . '/common.php');


$result = curlPost("/" . EXAMPLE_LIST_ID, [
    'lines' => [
        [
            'email' => 'hello@world.com',
        ]
    ]
], 'DELETE');


echo $result . "\n";