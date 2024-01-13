<?php
// array(2) { ["PHPSESSID"]=> string(26) "g6kmksios224ff5mtm82mjd99c" ["username"]=> string(4) "jdoe" }
// var_dump($_COOKIE);

$username = $_COOKIE['username'] ?? 'Guest';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Cookies</title>
</head>

<body>
    <h1>Welcome <?= $username ?></h1>
    <a href="destroy.php">Delete cookie</a>
</body>

</html>