<?php
include_once "user.php";
include "connection.php";
if(isset($_GET['del'])){
    $user1= new User($conx);
    $id= $_GET['del'];
    $user1->deleteContact($id);
}