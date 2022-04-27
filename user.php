<?php
include "connection.php";
session_start();
class User{
    public $id;
    public $username;
    public $password;
    public $conx;

    function __construct($conn)
    {
        $this->conx = $conn;
    }
    


}


