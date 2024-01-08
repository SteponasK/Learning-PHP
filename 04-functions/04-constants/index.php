<?php

// We can access Constants from anywhere (any scope)

// we can define const using define() keyword
define('APP_NAME', 'My App'); // convension to use all uppercase, we dont need $ sign
define('APP_VERSION', '1.0.0');
echo APP_NAME;
echo ' ';
echo APP_VERSION;

const DB_NAME = 'mydb';
const DB_HOST = 'localhost';
echo '<br>' . DB_NAME . ' ' . DB_HOST . '<br>';

function run()
{
    echo APP_NAME;
    echo DB_NAME, DB_HOST;
}
run();

// can't change value: error
// define('APP_NAME', 'My App 2');
// const DB_NAME = 'test';
