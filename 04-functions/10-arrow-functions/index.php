<?php
/*
function add($a, $b)
{
    return $a + $b;
}

echo add(1, 2);
*/

$add = fn ($a, $b) => $a + $b; // arrow function
echo $add(1, 2) . '<br>';


$numbers = [1, 2, 3, 4, 5];
/*
$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

print_r($squaredNumbers);
*/

// rewrite to an arrow function:
$squaredNumbers = array_map(fn ($number) => $number * $number, $numbers);
print_r($squaredNumbers);
