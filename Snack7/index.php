<?php
include_once __DIR__ . "/students.php";
var_dump($students);
?>


<?php foreach ($students as $student) { ?>
    <h1><?php echo $student['name'] . ' ' . $student['surname'] ?></h1>


<?php } ?>