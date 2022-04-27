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

/***************************Login*****************************/
    function login( $username, $password ){

        if (empty($username)) {
            $_SESSION['error1'] = "please enter your email";
            header('location:signin.php');
        }
        if (empty($password)) {
            $_SESSION['error2'] = "please enter your password";
            header('location:signin.php');
        }
        if (!empty($username) && !empty($password)) {

            $sql_valid = "SELECT * FROM user WHERE username=? AND password=? ";
            $REQ= $this->conx->prepare($sql_valid);
            $REQ->execute([$username , $password]);
            $REQ=$REQ->fetch(PDO::FETCH_ASSOC);
            if ($REQ) {

                $_SESSION['Fname'] = $REQ['fname'];
                $_SESSION['Lname'] = $REQ['lname'];
                $_SESSION['id']=$REQ['id'];
                $_SESSION['dateUp']=$REQ['date'];
                date_default_timezone_set('Africa/Casablanca');
                $date = date('d-m-Y h:i:sa');
                $_SESSION['dateIN']=$date;

               header('location:profil.php');

            } else {
                $_SESSION['wrong_info']="Username or Password is incorrect";
                header('location:signin.php');
            }
        }
    }
    function display(){

            $sql_valid = "SELECT * FROM contacts WHERE user =?";

            $REQ= $this->conx->prepare($sql_valid);
            $REQ->execute([$_SESSION['id']]);

            $req= $REQ->fetchAll(PDO::FETCH_ASSOC);

            return $req;
    }
    function addContact($name, $phone, $email, $address){

        $sql_insert = "INSERT INTO contacts(Name, Phone, Email,  address, user ) VALUES (?,?,?,?,?)";
        $REQ= $this->conx->prepare($sql_insert);
        $REQ->execute([$name, $phone, $email, $address, $_SESSION['id']]);

        if($REQ){
            header("location:contacts.php");
        }
        else {
            echo "something went wrong!";
        }
    }

    

    function displayContact($id){

        $sql_edit = "SELECT * FROM contacts WHERE id=?";
        $REQ= $this->conx->prepare($sql_edit);
        $REQ->execute([$id]);
        $res =$REQ->fetchAll(PDO::FETCH_ASSOC);

        if ($res) {
           foreach ($res as $req)
            $_SESSION['name'] = $req['name'];
            $_SESSION['phone'] = $req['phone'];
            $_SESSION['email'] = $req['email'];
            $_SESSION['address'] = $req['address'];
        }

    }

    function updateContact($id,$name,$phone,$email,$address){
            var_dump($id);
            $sql_update = "UPDATE contacts SET name = ? , phone= ? , email= ?, address = ? WHERE id=?";
            $REQ= $this->conx->prepare($sql_update);
            $REQ->execute([$name, $phone, $email,$address, $id]);
            header('location:contacts.php');


    }

    function deleteContact($id){
        $REQ = $this->conx->prepare("DELETE FROM contacts WHERE id=? ");
        $REQ->execute([$id]);
        header('location:contacts.php');
    }



}


