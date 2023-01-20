<?php

require(__DIR__ . '/common.php');


$raw = curlGet("");

$json = json_decode($raw, true);

echo "\n";
foreach($json['message']['structures'] as $list){

    echo "list id: ".$list['id']."\n";

    $field_count = count($list['structure']);
    echo "available fields count: $field_count\n\n";

}

echo "$raw\n";