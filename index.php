<?php

$destinationTime = new DateTime;
$destinationTime->setDate(10, 21, 2015);
$destinationTime->setTime(04, 29, 00);

$presentTime = new DateTime;
$presentTime->setDate(10, 21, 2015);
$presentTime->setTime(04, 06, 00);

$timeDifference = $presentTime->diff($destinationTime);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back to future</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <div class="time">
            <p><?= $destinationTime->format('10 21 2015 04 29') ?></p>
            <p><?= $presentTime->format('10 21 2015 04 06') ?></p>
        </div>
        <p><?= $timeDifference->format('%y year %m months %d days %h hours %i minute') ?></p>
    </main>
</body>

</html>