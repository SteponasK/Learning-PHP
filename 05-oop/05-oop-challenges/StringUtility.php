<?php

class StringUtility
{
    public function shout($string)
    {
        return strtoupper($string) . '!';
    }
    public function whisper($string)
    {
        return strtolower($string) . '.';
    }
    /*  Wrong: did not return the string: 
    public function repeat($string, $times = 2)
    {
        for ($i = 0; $i < $times; $i++) {
            echo $string . '<br>';
        }
    } */
    public function repeat($string, $times = 2)
    {
        // This functions repeats str specified amount of times
        return str_repeat($string, $times);
    }
}

$newObj = new StringUtility();
echo $newObj->shout('Hello World') . '<br>';
echo $newObj->whisper('How are you') . '<br>';
echo $newObj->repeat('Hello?');
