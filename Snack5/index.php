<?php

$string = 'La Corea del Sud è un paese affascinante. Situato nella parte meridionale della penisola coreana. Confina con la Corea del Nord e ha il Mar Giallo a ovest e il Mar del Giappone a est. La capitale, Seul, è una città moderna e vivace, famosa per i suoi grattacieli e mercati tradizionali.';

$array = explode('.', $string);

foreach ($array as $key => $value) {
    echo "<div>";
    echo $value;
    echo "</div>";
}
