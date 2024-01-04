<?php
$firstName = 'John';
$lastName = 'Doe';

$fullName = $firstName . ' ' .  $lastName; // in PHP we use . (instead of + )sign to concatinate strings
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Learn PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <!-- Output -->
            <?= 'Hello my name is ' . $fullName . '<br>' ?> <!-- string concatination -->
            <?= 'Hello my name is \'John\'' ?>
            <?= "Hello my name is $fullName" ?>
            <?= "Hello my name is {$fullName} <br>" ?>
        </div>
    </div>
</body>

</html>