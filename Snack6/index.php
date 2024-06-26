<?php
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = [];
$pm = [];

foreach ($db as $key => $value) {
    if ($key == 'teachers') {
        array_push($teachers, $value);
    } else {
        array_push($pm, $value);
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="greybox">

            <?php
            foreach ($teachers as $key => $value) {
                echo $value['lastname'];
                echo $value['name'];
            } ?>

        </div>

        <div class="greenbox">

        </div>
    </main>

</body>

</html>