<?php
$output = null;

$ids = [10, 22, 15, 45, 67, 33];
$users = ['user2', 'user1', 'user3'];

// count
$output = count($ids); // returns the number of elements in an array (length of the array)

// sort
sort($ids);
sort($users);

// rsort
rsort($ids);
rsort($users);

// array_push (adds a value on the end of the array)
array_push($ids, 100);
array_push($users, 'user4');

// array_pop (removes the last element)
array_pop($ids);
array_pop($users);

// array_shift (removes first element)
array_shift($ids);
array_shift($users);

// array_unshift (adds first element)
array_unshift($ids, 100);
array_unshift($users, 'user3');

// array_slice (returns new sliced array -> needs beggining index and length)
$ids2 = array_slice($ids, 2, 3); // 2 - beggining index, 3 - length 
// var_dump($ids2);

// array_splice
array_splice($ids, 1, 1, 'New ID'); // position 1 has been replaced with 'New ID'
array_splice($users, 1, 2, array('New User1', 'New User2')); //we can change multiple (length 2, and we use array to show what values are being changed)
array_splice($users, 1, 2, ['New User1', 'New User2']); // same as above

// array_sum
$output = 'Sum of IDs: ' . array_sum($ids); // gets the sum of the arrray (ints/floats)

// array_seach (finds the position of an element)
$output = 'User 2 is at index: ' . array_search('user3', $users);

array_push($users, 'user2');
// in_array (returns true/false, whether element exists in the array)
$output = 'User 2 Exists: ' . in_array('user2', $users);


// explode (turns a string into an array)
$tags = 'tech,code,programming';
$tagsArray = explode(',', $tags);
// var_dump($tagsArray);

// implode
$output = implode(',', $users);

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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
            <pre>
                <?php print_r($ids); ?>
            </pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
            <pre>
                <?php print_r($users); ?>
            </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>