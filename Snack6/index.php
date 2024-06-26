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
        $teachers = $value;
    } else {
        $pm = $value;
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
            <ul>
                <?php
                foreach ($teachers as $key => $value) {
                    echo "<li>" . "lastname:" . $value['lastname'] . "</li>";
                    echo "<li>" . "name:" . $value['name'] . "</li>";
                } ?>
            </ul>
        </div>

        <div class="greenbox">
            <ul>
                <?php
                foreach ($pm as $key => $value) {
                    echo "<li>" . "lastname:" . $value['lastname'] . "</li>";
                    echo "<li>" . "name:" . $value['name'] . "</li>";
                } ?>
            </ul>
        </div>
    </main>

</body>

</html>