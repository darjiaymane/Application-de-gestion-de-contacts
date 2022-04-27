<?php
include_once "user.php";
include "connection.php";
include_once "./includes/head.php";
include_once "./includes/navbar.php";

$user1= new user($conx);

$id=$_GET['id'];
    $user1->displayContact($id);

if(isset($_POST['submit'])){
    $REQ= $user1->updateContact($_GET['id'], $_POST['name'], $_POST['phone'], $_POST['email'], $_POST['address'] );
}


?>

    </div>
    </nav>
    <main class="d-flex flex-column px-5 gap-5 align-items-center  my-5 ">
        <h3 class="fw-normal">UPDATE CONTACT</h3>

        <form  action="" class="mt-4 bgp col-11 col-md-7  rounded-3 " method="post" >
            <div class="mb-3">
                    <div class="">
                        <input type="text" value="<?php echo $_SESSION['name']?>" class="form-control della bgp w-100" placeholder="Name" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
            </div>

            <div class="mb-3 ">
                <input type="text" value="<?php echo $_SESSION['phone']?>" class="form-control della bgp" placeholder="Phone" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3 ">
                <input type="email" value="<?php echo $_SESSION['email']?>" class="form-control della bgp" placeholder="Email" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-5">
                <input type="textarea" value="<?php echo $_SESSION['address']?>" name="address"  placeholder="Address" class="form-control della bgp" id="exampleInputPassword1">
            </div>

            <div class="text-center mt-5">
                <button type="submit" name="submit" class="btn w-100 bgg rounded-pill">UPDATE</button>
            </div>
        </form>
    </main>



<?php
include_once "./includes/footer.php";

?>
