<?php
$agenum = isset($_GET['age']);
if ($agenum)

    if (strlen($_GET['name'] > 3) and str_contains($_GET['email'], '.') and str_contains($_GET['email'], '@') and !is_numeric($_GET('age'))) {
        echo 'DAJE ROMA DAJE';
    } else {
        echo 'DAJE LAZIO DAJE';
    }
