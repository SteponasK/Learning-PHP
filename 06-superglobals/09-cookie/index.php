<?php
// name, value, expiration (in seconds time since epoch), path ('/' means that accesible through the whole domain)
setcookie('username', 'jdoe', time() + 3600, '/');
// now we can see this cookie
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP Cookies</title>
</head>

<body>
    <p>Cookie set. <a href="page.php">Go to page.php</a></p>
</body>

</html>