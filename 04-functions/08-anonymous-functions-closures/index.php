<?php

$square = function ($number) { // anynomous function set to a variable  
    return $number * $number;
};

$result = $square(5);
echo 'The square of 5 is ' . $result . '<br>';

// Closures
function createCounter()
{
    $count = 0;

    $counter = function () use (&$count) {
        return ++$count;
    };
    return $counter;
}
$counter = createCounter();
echo $counter() . '<br>';
echo $counter() . '<br>';
echo $counter() . '<br>';
//echo  $counter();
