<?php
include_once "user.php";

    /*************Login*****************/
    if (isset($_POST['signIn'])){
        $user1 = new User($conx);
        $user1->login(($_POST['username']), ($_POST['password']));
    }

    /*************SignUP*****************/
    if (isset($_POST['signup'])){
        $user1 = new User($conx);
        $user1->signup($_POST['fname'],$_POST['lname'],  ($_POST['username']), ($_POST['password']));
    }
