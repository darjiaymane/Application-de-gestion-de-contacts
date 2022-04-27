<?php
session_start();
include "connection.php";
include_once "./includes/head.php";
include_once "./includes/navbar.php";
?>
            <a href="signin.php" class="fs-5 btn">Sign in</a>
        </div>
    </nav>
    <main class="d-flex flex-column px-5 gap-5 align-items-center  my-5 ">
        <h3 class="fw-normal">SIGN UP</h3>
        <?php
        if(isset($_SESSION['error4'])){
            echo '<p class="alert alert-danger text-danger p-3 fs-11 border-0 mt-2" role="alert">';
            echo $_SESSION['error4'];
            echo "<br>Try with another one";
            echo '</p>';
        }
        ?>

        <form  action="METHODS.php" onsubmit="validate(event)"  name="signup" class="mt-4 bgp col-11 col-md-7  rounded-3  my-2" method="post">

            <div class="mb-3">
                <div class="d-flex flex-column flex-md-row justify-content-between gap-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control della bgp w-100"  placeholder="First name" name="fname" id="fname" aria-describedby="emailHelp">
                        <small class="text-warning"  id="fnameError"></small>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control della bgp w-100"  placeholder="Last name" name="lname" id="lname" aria-describedby="emailHelp">
                        <small class="text-warning" id="lnameError"></small>
                    </div>
                </div>
            </div>

            <div class="mb-3 ">
                <input type="text" class="form-control della bgp" placeholder="Username" id="username" name="username" id="username" aria-describedby="emailHelp">
                <small class="text-warning" id="usernameError"></small>
            </div>
            <div class="mb-3">
                <input type="password" name="password"  placeholder="Password"  class="form-control della bgp" id="password">
                <small class="text-warning" id="passwordError"></small>
            </div>
            <div class="mb-3">
                <input type="password"  placeholder="Confirm password" class="form-control della bgp" id="passwordConfirm">

                <small class="text-warning" id="passwordConfirmError"></small>
            </div>

            <div class="text-center mt-4">
                <button type="submit" id="submit" name="signup" class="btn w-100 bgg rounded-pill">SIGN UP</button>
            </div>
        </form>
        <p class="fw-light text-center">Already have an account? <a class="fw-normal" href="signin.php">Sign in</a></p>
    </main>



<?php
session_destroy();
include_once "./includes/footer.php";
?>