<?php
session_start();
include "connection.php";
include_once "./includes/head.php";
include_once "./includes/navbar.php";

?>
    <div>
        <a href="profil.php" class=" btn text-light"><i class="far fa-user rounded-circle"></i>
            <?php
            if(isset($_SESSION['Fname'])){
                echo $_SESSION['Fname'] ;}
            ?>
        </a>
        <a href="logout.php" class=" btn text-light">Logut</a>
        <a href="profil.php"><img class="py-2" src="./assets/undraw_male_avatar_323b.svg" alt="" height="50" width="50"></a>
    </div>
    </div>
    </nav>
    <main class="d-flex container gap-3 flex-column pt-5 align-items-center mt-5 ">

        <section class="d-flex gap-5 align-items-center">
                <div class="col-6 bg-dark text-center d-none d-md-block shadow-lg p-5">
                    <h2 class="text-center mt-5">
                        Welcome back to your Profile<br>
                        <h3 class="text-center text-gris mt-4 ">
                        <?php
                        if(isset($_SESSION['Fname'])){
                            echo $_SESSION['Fname'];}
                        ?>
                        </h3>

                    </h2>
                    <a href="contacts.php"><button class="btn btn-primary fs-5 mt-5 px-5">Contact list</button></a>
                </div>
                <div class="w-100 w-md-50 ">
                    <div class="w-100 d-flex flex-column justify-content-between align-items-center">
                        <img class="py-2 w-25 mb-4" src="./assets/undraw_male_avatar_323b.svg" alt="" >
                    </div>
                    <div>
                    <H5 class="border-bottom border-2 w-75 pb-1 mb-4 mx-auto text-gris">
                            <span class="h4 text-gris">Name: &nbsp;</span>

                        <?php
                        if(isset($_SESSION['Fname'])){
                            echo $_SESSION['Fname']." ".$_SESSION['Lname'] ;}
                        ?>
                    </H5>
                    <H5 class="border-bottom border-2 w-75 pb-1 mb-4 mx-auto text-gris">
                        <span class="h4 text-gris">Last Sign in &nbsp;&nbsp;: &nbsp;&nbsp;</span>

                        <?php
                        if(isset($_SESSION['dateIN'])){
                            echo $_SESSION['dateIN'];
                        }
                        ?>
                    </H5>
                        <H5 class="border-bottom border-2 w-75 pb-1 mb-4 mx-auto text-gris">
                            <span class="h4 text-gris">Sign up date&nbsp;: &nbsp;</span>

                        <?php
                        if(isset($_SESSION['dateUp'])){
                            echo $_SESSION['dateUp'];
                        }
                        ?>
                    </H5>
                    </div>
            </div>
        </section>

    </main>

<?php
include_once "./includes/footer.php";
?>