<?php
$output = null;

$fruits = [
    ['Apple', 'Red'],
    ['Orange', 'Orange'],
    ['Banana', 'Yellow']
];
$output = $fruits[0][1];

$fruits[] = ['Grape', 'Purple'];

$users = [
    ['name' => 'John', 'email' => 'john@gmail.com', 'password' => 123456],
    ['name' => 'Mary', 'email' => 'mary@gmail.com', 'password' => 654321],
    ['name' => 'Ken', 'email' => 'ken@gmail.com', 'password' => 123123],
];

$users[] = ['name' => 'Mike', 'email' => 'mike@gmail.com', 'password' => 321321];
array_push($users, ['name' => 'Larry', 'email' => 'larry@gmail.com', 'password' => 123321]);

array_pop($users); // delete last element
array_shift($users); // delete first element

unset($users[0]); // delete first element

$output = $users[1]['email'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <p>
            <pre>
                    <?php print_r($users); ?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>