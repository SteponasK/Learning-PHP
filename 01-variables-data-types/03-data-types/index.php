<?php

// String
$name = 'Moe Doe';
$name2 = 'John Doe';

var_dump($name); // shows the type of the variable
echo '<br>';
echo getType($name2); // also shows the type of the variable

echo '<br>';

// Integer
$age = 35;
var_dump($age);
echo '<br>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// Boolean
$isLoaded = true;
var_dump($isLoaded);
echo '<br>';

// Array
$friends = ['John', 'Jack', 'Jane'];
var_dump($friends);
echo '<br>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br>';

// Null
$car = null;
var_dump($car);
echo '<br>';


// Resource
// $file = fopen('sample.txt', 'r');
// var_dump($file);
