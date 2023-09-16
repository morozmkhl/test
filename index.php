<?php


function summ($a, $b){
    $summ = $a+$b;
    return $summ;
}



$person = [
    "id" => 234,
    "name" => "Misha",
    'age' => 25,
    'hobbies' => [
        "music",
        "programming",
        "sport"
    ],
];

foreach ($person['hobbies'] as $hobby){
    print($hobby."\n");
}


