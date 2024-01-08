<?php

$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

// print_r($squaredNumbers);



$square = function ($number) {
    return $number * $number;
};
$squaredNumbers1 = array_map($square, $numbers);
// print_r($squaredNumbers1);




function applyCallback($callback, $value)
{
    return $callback($value);
}
$double = function ($number) {
    return $number * 2;
};
$result = applyCallback($double, 5);
var_dump($result);
