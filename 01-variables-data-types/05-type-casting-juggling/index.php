<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit Conversion
$result = $number1 + $number2;
$result = $number1 + $number3; // int (string to int)
$result = $number3 + $number3; // int (string to int)
$result = $number1 . $number2; // string (int to string (concatination))
//$result = $fruit + $number2; // Error
$result = $number1 + $bool1; // We got 6, because 5 + true == 5 + 1 == 6
$result = $number1 + $bool2; // We got 5, because 5 + false == 5 + 0 == 5
$result = $number1 + $null; // We got 5, because null is being converted to 0 

$result = (string) $number1;
$result = (int) $number3;
var_dump($result);
