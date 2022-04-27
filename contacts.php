<?php
include_once "user.php";
include "connection.php";
include_once "./includes/head.php";
include_once "./includes/navbar.php";

$user1= new user($conx);
$REQ= $user1->display();

if (isset($_POST['submit'])){
    $user1->addContact($_POST['name'],$_POST['phone'],  ($_POST['email']), ($_POST['address']));
}

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
<main class="d-flex container flex-column align-items-center mt-5 ">

    <div class=" w-100">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class=" text-gris">Contact List</h4>
            <div class="d-flex gap-2 gap-sm-3 mb-2 align-items-center">
                <i class="far fa-sort "></i>
                <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class=" btn bgbl  d-none d-sm-inline text-light">ADD NEW CONTACT</a>
                <a  data-bs-toggle="modal" data-bs-target="#exampleModal"  class="btn btn-light d-inline d-sm-none addNew" role="button"><i class="fal fa-user-plus fw-normal h5 text-bgp"></i></a>
            </div>
        </div>
    </div>
    <div class=" table-responsive col-12">
        <table class="table lolooo border-top table-borderless border-2 ">
            <thead>
            <tr class="border-radius ">
                <th class="invisible p-8 p-8">profilPic</th>
                <th >Name</th>
                <th class=" border-radius">Phone</th>
                <th >Email</th>
                <th >Address</th>
                <th class="invisible ">jfjfjjf</th>
                <th class="invisible ">jfjfjjf</th>
            </tr>
            </thead>

            <tbody>
            <?php
                foreach($REQ as $contact):
            ?>
                <tr class=" align-middle opa  border-radius border-none p-1">
                    <td class=""><img src="./assets/undraw_male_avatar_323b.svg" alt="" height="50" width="50"></td>
                    <td class="py-2"><?php echo $contact["name"] ?></td>
                    <td class="py-2"><?php echo $contact["phone"] ?></td>
                    <td class="py-2"><?php echo $contact["email"] ?></td>
                    <td class="py-2"><?php echo $contact["address"] ?></td>
                    <td class="py-2"><a href="./edit.php?id=<?php echo $contact['id'];?>"><i class="far fa-pen fw-bold text-bgp"></i></a></td>
                    <td class="py-2"><a href="./delete.php?del=<?php echo $contact['id'];?>"><i class="far fa-trash fw-bold text-bgp"></i></a></td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="modal fade w-100 vh-100" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog mx-auto  mt-5">
            <div class="modal-content bgp">
                <div class="modal-header bg-light  p-2">
                    <h5 class="modal-title text-bgp" id="exampleModalLabel">New Students</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="text-bgp col-8 m-auto" name="add" onsubmit=" " method="POST" action="">
                        <div class="mb-3">
                            <input class="form-control della bgp" placeholder="Name" name="name" id="name">
                            <small class="text-warning" id="msgName"></small>
                        </div>
                        <div class="mb-3">
                            <input class="form-control della bgp" placeholder="Phone" type="text" name="phone" >
                            <small class="text-warning" id="msgPhone"></small>
                        </div>
                        <div class="mb-3">
                            <input class="form-control della bgp" placeholder="Email" type="email" name="email" >
                            <small class="text-warning" id="msgEmail"></small>
                        </div>
                        <div class="mb-3">
                            <input class="form-control della bgp" placeholder="Addrress" type="textarea" name="address" >
                            <small class="text-warning" id="msgAddress"></small>
                        </div>
                        <div class="mt-5 text-center">
                            <button type="button" class="btn btn-secondary px-5 rounded-pill"
                                    data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn bgbl rounded-pill px-4" id="submit" name="submit">Add Contact</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
include_once "./includes/footer.php";
?>