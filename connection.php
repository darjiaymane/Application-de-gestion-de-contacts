<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "YouContact";

    try{
        $conx= new PDO("mysql:host={$servername};dbname={$dbname}",$username,$password);
        // $conn->setAtrebute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Connection failed: ".$e->getMessage());

    }
    return $conx ;
?>