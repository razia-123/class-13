<?php
include_once './backend_inc/header.php';


?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
              <div class="row">
                <div class="col-5 text-center">
                   <div>
                   <label for="profile_input">
                   <img src="https://api.dicebear.com/7.x/initials/svg?seed=<?= $_SESSION['auth']['fname']?>" alt="" class="w-50 rounded">
                   </label>
                   <input type="file" id="profile_input" class="d-none">
                   </div>
                   <button type="submit" class="btn btn-primary"> Update photo</button>
                </div>
                <div class="col-7">
<form action="./../controllers/usercontrollers/updateuser.php" method="POST">
<label for=""> First Name</label>
    <input type="text" class="form-control mb-4" value="<?= $_SESSION['auth']['fname']?>">

    <label for=""> Last Name</label>
    <input type="text" class="form-control mb-4"  value="<?= $_SESSION['auth']['lname']?>">
   
    <label for=""> Email</label>
    <input type="text" class="form-control mb-4"  value="<?= $_SESSION['auth']['email']?>">
 
    <button type="submit"class="btn btn-primary">  Save Changes</button>
</form>


                </div>
              </div>


                </div>

            <!-- End of Main Content -->
            <?php
include_once './backend_inc/footer.php';
?>