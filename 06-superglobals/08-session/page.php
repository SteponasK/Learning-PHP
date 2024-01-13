<?php
session_start(); // name was set to john in different file, but it's the same session, so we can see it
// its stored in a cookie (inspect element -> application -> cookies)

if (isset($_SESSION['name'])) {
    echo $_SESSION['name'];
} else {
    echo 'Name is not set';
}
