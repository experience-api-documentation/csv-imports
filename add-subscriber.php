<?php

require(__DIR__ . '/common.php');


$result = curlPost("/" . EXAMPLE_LIST_ID, [
    'lines' => [
        [
            'email' => 'hello@world.com',
            'firstname' => 'John',
            'lastname' => 'Doe',
            'language' => 'en'
        ]
    ]
]);


echo $result . "\n";