<?php
session_start();


unset($_SESSION['name']);


/* Typically done with authentication system

*/
session_destroy();
echo 'Session Destroyed';
// Index.php starts session (sets name) -> page.php shows name -> destroy.php unsets name -> page.php doesnt have name anymore