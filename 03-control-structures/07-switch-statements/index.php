<?php
$dayOfWeek = date('l');

switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday Blues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'Atleast it\'s not Monday';
        $color = 'green';
        break;
    case 'Wednesday':
        $message = 'Hump day';
        $color = 'orange';
        break;
    case 'Thursday':
        $message = 'One more day until friday!';
        $color = 'red';
        break;
    case 'Friday':
        $message = 'Thank god it\'s father';
        $color = 'purple';
        break;
    case 'Saturday':
        $message = 'Have a nice weekend!';
        $color = 'magenta';
        break;
    case 'Sunday':
        $message = 'Have a nice weekend!';
        $color = 'magenta';
        break;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day Is It?</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?= $color ?>;
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1>
        <?= strtoupper($message); ?>
    </h1>
</body>

</html>