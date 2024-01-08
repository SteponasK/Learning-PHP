<?php

// Php is dynamically typed lang, 
//but there is an option for strict files in main php ini fail (config) or type it in your script

declare(strict_types=1); // we turn on strict types

function getSum(int $a, int $b): int
{
    return $a + $b;
    //return 'Hello'; (does not work)
}
// does not work
//echo getSum(5, '4'); 

echo getSum(5, 4); // works
echo '<br>';

function greeting(string $name): void // no return value
{
    echo 'Hello ' . $name;
}
greeting('John');
