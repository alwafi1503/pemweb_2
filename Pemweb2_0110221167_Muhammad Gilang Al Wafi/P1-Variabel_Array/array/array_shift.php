<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array POP</title>
</head>
<body>
<h3>Array Shift</h3>
    <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_shift($tim);

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>

    <hr>
<h3>Array Unshift</h3>
    <?php
    $tim = ['erwin','heru','ali','zaki'];
    array_unshift($tim, 'joko', 'wati');

    foreach ($tim as $value) {
        echo $value . '<br>' ;
    }
    ?>
</body>
</html>