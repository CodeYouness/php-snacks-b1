<?php
$basket = [
    [
        "team1" => "Milano",
        "team2" => "Borgonova",
        "point1" => rand(1, 100),
        "point2" => rand(1, 100),
    ]
];

foreach ($basket as $key => $value) {
    foreach ($basket[$key] as $key => $value) {
        echo $key;
        echo $value;
    }
}
