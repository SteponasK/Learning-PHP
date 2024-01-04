<?php
$title = 'Learn PHP from scratch';
$heading = 'Welcome to the course';
$body = 'In this course, you will learn the fundamentals of the PHP language';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> <?= $title  ?> </title> <!-- echo statement using varialbe $title -->
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">
                <?= $title ?> <!-- echo statement, but shorter (using "<?= " and " ?>" tags) -->
            </h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-semibold mb-4"> <?= $heading ?> </h2>
            <p> <?= $body ?> </p>
        </div>
    </div>
</body>

</html>