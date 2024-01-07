<?php


function sayHello()
{
    echo 'Hello World';
}


function sayGoodbye()
{
    return 'Goodbye';
}

sayHello();
sayHello();

$goodbye = sayGoodbye();
echo $goodbye;
