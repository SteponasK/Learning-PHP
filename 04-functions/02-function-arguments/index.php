<?php

function add($a = 0, $b = 0) // default values added
{
    return $a + $b;
}

echo add(1, 2);
echo '<br>';
echo add(100, 250);


function sayHello($name = 'World')
{
    return 'Hello ' . $name;
}

echo sayHello('John');

function addAll(...$args) // rest operator (accepts infinite count of arguments)
{ // here we loop through all arguments (we got it as array), and then count the sum
    $total = 0;
    foreach ($args as $number) {
        $total += $number;
    }
    return $total;
}
echo addAll(1, 2, 3, 4, 5);
