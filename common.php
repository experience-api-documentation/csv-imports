<?php

define('PARTNER_TOKEN', '((your partner token))');
define('HOTEL_TOKEN', '((business token))');
define("EXAMPLE_LIST_ID", '((list id))');
define('BASE_URL', 'https://interface.experience-hotel.com/api/sending-list-csv');




function curlGet(string $path)
{

    $ch = curl_init();
    $token = PARTNER_TOKEN . ':' . HOTEL_TOKEN;


    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => BASE_URL . $path
    ]);

    return curl_exec($ch);

}


function curlPost(string $path, array $data, string $verb = 'POST')
{

    $ch = curl_init();
    $token = PARTNER_TOKEN . ':' . HOTEL_TOKEN;

    $url = BASE_URL . $path;
    echo $url . "\n";
    curl_setopt_array($ch, [
        CURLOPT_HTTPHEADER => [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $token
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_URL => $url,
        CURLOPT_CUSTOMREQUEST => $verb,
        CURLOPT_POSTFIELDS => json_encode($data)
    ]);

    return curl_exec($ch);

}


