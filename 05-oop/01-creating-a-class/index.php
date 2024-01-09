<?php

class User
{
    // public $name = 'John Doe';
    // public $email = 'John@gmail.com';

    // Properties
    public $name;
    public $email;

    // Constructor
    public function __construct($name, $email)
    { // Runs everytime a new object gets created
        // echo 'Constructor ran <br>';
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login()
    {
        echo  $this->name  . ' logged in <br>';
    }
}

// Instantiate a new object
$user1 = new User('John Doe', 'John@gmail.com');

// $user1->name = 'John Doe';
// $user1->email = 'John@gmail.com';


$user1->login();

$user2 = new User('Jane Doe', 'Jane@gmail.com');
// $user2->name = 'Jane Doe';
$user2->login();
// var_dump($user1);
//var_dump($user2);
