<?php
include_once "user.php";
include_once "connection.php";
$user1 = new User($conx);
    $user1->logout();
