<?php
session_start();
session_destroy();
//the cookie now is null
unset($_COOKIE['user']);
setcookie('user', "");

header("Location: login.php");