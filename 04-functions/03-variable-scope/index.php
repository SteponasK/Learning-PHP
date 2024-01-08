<?php

// Global Scope
$name = 'Alice';


function sayHello(/*$hello*/)
{
    // we get an error (because it is local scope)
    //echo 'Hello ' . $name . '<br>';

}
sayHello();

// 1. we need to pass as parameter:
function sayHello1($name)
{
    echo 'Hello ' . $name . '<br>';
}
sayHello1($name);
// 2. inside the function define the variable as global

function sayHello2()
{
    global $name;
    // Local scope
    $name = 'Bob'; // we changed the global variable (should not do this)
    echo 'Hello ' . $name . '<br>';
}
echo $name . '<br>';
sayHello2();
echo $name . '<br>';


function sayGoodbye()
{
    $names = ['Jack', 'Jill'];
    echo 'Goodbye ' . $names[0];
}

echo $names[0] . '<br>'; // cant access (variable is functions local scope)
sayGoodbye();
echo $names[0] . '<br>'; // cant access (variable is functions local scope)