<?php

// two ways to initialise arrays
$names = array('John', 'Jack', 'Jill');
$numbers = [1, 2, 3, 4, 5, 6];

function inspect($value)
{
    echo '<pre>'; // refformats the text
    var_dump($value);
    echo '<pre>';
}
// inspect($names);
// inspect($numbers);

// print_r($names);
// print_r($numbers);

// echo $names; // not possible (echo works on strings)
// echo $names[2];
// echo $numbers[3];

$numbers[6] = 100; // adds a new element (PHP has dynamic arrays)
$numbers[] = 101; // automatically adds a new value at the end of the array

$numbers[3] = 200; // change value
unset($numbers[3]); // deletes index 3 completely

$numbers = array_values($numbers); // reassigns indexes from (1,2,4,5,6,7) to (1,2,3,4,5,6,)

inspect($numbers);



die(); // ignores all HTML that comes after this
?>

<h1>Hello</h1>