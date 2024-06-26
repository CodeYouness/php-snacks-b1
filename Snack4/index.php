<?php

$arraynumber = [];

while (count($arraynumber) < 15) {
    $randnum = rand(1, 15);
    if (!array_search($randnum, $arraynumber)) {
        array_push($arraynumber, $randnum);
        echo $randnum;
        echo '<br>';
    }
}
