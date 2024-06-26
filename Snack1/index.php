<?php
$basket = [
    [
        "team1" => "Milano",
        "team2" => "Borgonova",
        "point1" => rand(1, 100),
        "point2" => rand(1, 100),
    ],
    [
        "team1" => "Africa",
        "team2" => "Europa",
        "point1" => rand(1, 100),
        "point2" => rand(1, 100),
    ],
    [
        "team1" => "Battellovapore",
        "team2" => "SugoAlPesto",
        "point1" => rand(1, 100),
        "point2" => rand(1, 100),
    ],
    [
        "team1" => "Pennette",
        "team2" => "ConSugo",
        "point1" => rand(1, 100),
        "point2" => rand(1, 100),
    ],
];

foreach ($basket as $key => $value) {
    foreach ($basket[$key] as $key => $value) {
        echo " - ";
        echo $value;
        if ($key === 'point2') {
            echo "</br>";
        };
    }
}
