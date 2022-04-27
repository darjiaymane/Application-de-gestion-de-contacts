<?php

session_start();
include "connection.php";
include_once "./includes/head.php";
include_once "./includes/navbar.php";

?>
 <a href="signup.php" class="fs-5 btn">Sign up</a>
        </div>
    </nav>
    <main class="d-flex flex-column px-5 gap-5 align-items-center  my-5 ">
        <h3 class="fw-normal">SIGN IN</h3>
            <?php
                if(isset($_SESSION['wrong_info'])){
                    echo '<p class=" alert alert-danger text-danger p-3 fs-11 border-0 mt-2" role="alert">';
                    echo $_SESSION['wrong_info'] ;
                    echo '</p>';
                }
            ?>
        <form  action="METHODS.php" name="signin" class="my-4 bgp col-11 col-md-7  rounded-3  my-2" method="post">


            <div class="mb-3 ">
                <input type="text" class="form-control della bgp" placeholder="Username" name="username" id="exampleInputEmail1" aria-describedby="emailHelp">
                <p class="  text-warning mt-2" role="alert">
                    <?php
                    if(isset($_SESSION['error1'])){
                        echo $_SESSION['error1'] ;}
                    ?>
                </p>
            </div>
            <div class="mb-3">
                <input type="password" name="password"  placeholder="Password" class="form-control della bgp" id="exampleInputPassword1">
                <p class="text-warning mt-2" role="alert">
                    <?php
                    if(isset($_SESSION['error2'])){
                        echo $_SESSION['error2'] ;}
                    ?>
                </p>
            </div>
            <div class="my-3 p-0 form-check">
                <a class="ms-3 fw-light fs-6">Forget password ?</a>
            </div>
            <div class="text-center mt-5">
                <button type="submit" name="signIn" class="btn w-100 bgg rounded-pill">Login</button>
            </div>
        </form>
        <p class="fw-light">Already have an account? <a class="fw-normal" href="signup.php">Create one</a></p>

    </main>


<?php
session_destroy();
include_once "./includes/footer.php";

?>