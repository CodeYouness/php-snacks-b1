<?php

$agenum = (float)$_GET['name'];

if (strlen($_GET['name'] > 3) and str_contains($_GET['email'], '.') and str_contains($_GET['email'], '@') and is_nan($_GET['name'])) {
    echo 'DAJE ROMA DAJE';
} else {
    echo 'DAJE LAZIO DAJE';
}
