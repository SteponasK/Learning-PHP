<?php
echo "<h3>Sum of an array </h3>";

/*
  Challenge 1: Sum of an array
  
  1. Create an array of numbers 
  2. Get the sum of all of the numbers combined and put into a variable.
  4. Get the amount of numbers in the array and put into a variable.
  5. Print out 'The sum of the {amount} numbers is: {sum} '. For example, if the array is [1, 2, 3, 4, 5], the output should be 'The sum of the 5 numbers is: 15'. 
*/
$numbers  = [1, 2, 3, 4, 5];
$sum = array_sum($numbers);
$amount_of_numbers = count($numbers);

echo "The sum of {$amount_of_numbers} numbers is {$sum}";

/*
  Challenge 2: Colors array

  1. Reverse the `$colors` array.
  2. Add 'purple' and 'orange' to the end of the array.
  3. Replace the second color with 'pink'
  4. Remove the last element of the array.

You should end up with the following array: ['yellow', 'pink', 'blue', 'red', 'purple']
*/

echo '<h3>Colors Array</h3>';

$colors = ['red', 'blue', 'green', 'yellow'];
$colors = array_reverse($colors);
// array_push($colors, 'purple');
// array_push($colors, 'orange');

// Or we can use array_merge to add 2 elements:
$colors = array_merge($colors, ['purple', 'orange']);
$colors[1] = 'pink';
array_pop($colors);

echo implode(', ', $colors);
/*
  Challenge 3: Job listings array

  1. Create a multi-dimensional array of associative arrays of 3 job listings with the fields id, 
  job_title, company, contact_email, and contact_phone. Also add an array field for skills.
   The skills array should be an array of strings with each skill a person has.
    For example, 'PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS', etc.
  2. Create a new listing using the `array_push()` function. The new listing should have the same fields as the others.
  3. Print out the job_title of the second job listing in the array.
  4. Print out the first skill of the third job listing in the array.
*/

echo '<h3>Job Listings</h3>';

$listings = [
    [
        'id' => 1,
        'job_title' => 'SWE',
        'company' => 'Amazon',
        'contact_email' => '1@gmail.com',
        'contact_phone' => '111-111-111',
        'skills' => ['PHP', 'Symfony']
    ],
    [
        'id' => 2,
        'job_title' => 'Back-End Dev',
        'company' => 'Google',
        'contact_email' => '2@gmail.com',
        'contact_phone' => '222-222-222',
        'skills' => ['Go', 'Coffee']
    ],
    [
        'id' => 3,
        'job_title' => 'Data Scientist',
        'company' => 'Meta',
        'contact_email' => '3@gmail.com',
        'contact_phone' => '333-333-333',
        'skills' => ['Python', 'R']
    ],
];

array_push($listings, [
    'id' => 4,
    'job_title' => 'Sys admin',
    'company' => 'Vinted',
    'contact_email' => '4@gmail.com',
    'contact_phone' => '444-444-444',
    'skills' => ['Big brain', 'Networks']
]);
echo $listings[1]['job_title'];
echo "<br>";
echo $listings[2]['skills'][0];
