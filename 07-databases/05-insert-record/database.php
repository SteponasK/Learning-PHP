<?php

// Lets create a PDO (tutorial)

// Database Creds
$host = 'localhost';
$port = 3306;
$dbName = 'blog';
$username = 'php-test-brad';
$password = 'php-test-brad';
// $password = 'php-test-brad-wrong-password'; // We get an error

// DSN - Data Source Name
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";
/*
    PDO constructor:
    public function __construct(
        string $dsn,
        string|null $username = null,
        string|null $password = null,
        array|null $options = null) { }    
    */
try {
    // Create a PDO instance
    $pdo = new PDO($dsn, $username, $password);

    // Set PDO to throw exceptions on error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch as Assoc array (if not included, when we get 'id' => 0, 0 => 0, 'title' => 'post1', 1 => 'post1')
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // now we have associative array
} catch (PDOException $e) {
    // If there is an error, catch it there
    echo 'Connection failed: ' . $e->getMessage();
}
