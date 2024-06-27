<?php
include_once __DIR__ . "/animals.php";

$fish = [];
$mammals = [];
$reptiles = [];

foreach ($animals as $value) {

    if ($value['class'] == 'fish') {
        $fish[] = $value;
    } elseif ($value['class'] == 'mammals') {
        $mammals[] = $value;
    } elseif ($value['class'] == 'reptiles') {
        $reptiles[] = $value;
    }
}

var_dump($fish);
