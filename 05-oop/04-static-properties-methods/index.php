<?php

class MathUtility
{
    /*
    public $pi = 3.14;
    */
    public static $pi = 3.14; // let's try static : we get errors.

    public static function add(...$nums)
    {
        return array_sum($nums);
    }
}
/* Bad usage:
$mathUtil1 = new MathUtility();
$mathUtil2 = new MathUtility();
echo $mathUtil1->pi;
echo $mathUtil2->pi;
*/

// Correct usage:
echo MathUtility::$pi . '<br>';
echo MathUtility::add(1, 2, 3, 4, 5);
