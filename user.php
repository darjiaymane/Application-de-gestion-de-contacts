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
    function signup( $fname, $lname, $username, $password){

            $date = date('d-m-Y h:i:sa');
            $_SESSION['dateUp']=$date;
            $_SESSION['dateIN']=$date;

            $sql_insert = "INSERT INTO user (`fname`,`lname`,`username`, `password`, `date`) VALUES (?,?,?,?,?)";

            try {
                $REQ= $this->conx->prepare($sql_insert);
                $REQ->execute([$fname, $lname, $username , $password, $date]);
                $_SESSION['Fname'] = $fname;
                $_SESSION['Lname'] = $lname;
                $req= $this->conx->prepare("SELECT id FROM user WHERE username=?");
                $req->execute([$username]);
                $req=$req->fetch(PDO::FETCH_ASSOC);
                $_SESSION['id']=$req['id'];
                header("location:profil.php");

            }catch (Exception $e){
                $_SESSION['error4']="The username is already exist";
                header("location:signup.php");
            }


    }



}


