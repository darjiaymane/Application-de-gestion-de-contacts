<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>YouContact | Welcome</title>
</head>

<body class="container bgp vh-100">
<nav class="navbar navbar-light ">
    <div class="container-fluid ">
        <a class="navbar-brand ps-3 fs-4 fw-bold" href="index.php">You<span class="text-bgp">Contact</span></a>

    </div>
</nav>
<main class="d-flex shadow-lg align-items-center  index my-5 ">
    <div class="  bg-secondary w-50 h-100 p-5   ">
        <h1 class="  mt-4">Welcome to YouContact</h1>
        <p class=" mt-4 me-3 fw-bold fs-6">Create, edit and delete.
            <br>With YouContact Manage your contact list the most easy and friendly way,
            <br>Join Us and enjoy the adventure.</p>
        <div class=" d-flex gap-4 justify-content-center text-center mt-5 ">
            <a href="signin.php"> <button  class="btn px-5 fw-bold mt-3 border-2 borderBtn rounded-pill">SIGN IN</button></a>
            <a href="signup.php"> <button  class="btn px-5 fw-bold bgg mt-3 rounded-pill ">JOIN US</button></a>
        </div>
    </div>
    <div class="h-100 bgd w-50 text-center d-flex shadow-lg align-items-center ">
    <img src="assets/undraw_close_tab_re_4cj6.svg" class=" p-5 m-auto  w-75">
    </div>


</main>




<?php
include_once "./includes/footer.php";

?>