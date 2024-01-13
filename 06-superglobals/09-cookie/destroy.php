<?php
// Delete the cookie by setting expiration date before the time that is right now
setcookie('username', '', time() - 3600, '/');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Cookies</title>
</head>

<body>

    <p>
        Your cookie has been deleted. <a href="page.php">Go to page.php</a>
    </p>

</body>

</html>