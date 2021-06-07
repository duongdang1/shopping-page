<?php
if(!isset($_SESSION)){
    session_start();
}
include('header.php');
$user = array();
if(isset($_SESSION['user_id'])){
    require ('mysqli_connect.php');
    require('helper.php');
    $user = get_user_info($con, $_SESSION['user_id']);
}

?>

<section id="profile-site">
    <div class="container py-5">
        <div class="row">
            <div class="col-4 offset-4 shadow py-4">
                <div class="upload-profile-image d-flex justify-content-center pb-5">
                    <div class="text-center">
                        <h4 class="py-3">
                            <?php
                            if(isset($user['firstName'])){
                                printf('%s %s', $user['firstName'], $user['lastName'] );
                            }
                            ?>
                        </h4>
                    </div>
                </div>




            </div>
        </div>
    </div>
</section>
<section id="edit-profile">
<!--    <h4>Update profile info</h4>-->
    <div class="d-flex justify-content-center">

        <form action="profile-process.php" method="post" enctype="multipart/form-data" id="log-form">
            <div class="form-row my-4">
                <div class="col">
                    <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName'];  ?>" required name="firstName" id="firstName" class="form-control" placeholder="new first name">                    </div>
                <div class="col">
                    <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName'];  ?>" required name="lastName" id="lastName" class="form-control" placeholder="new last name">                  </div>
                <div class="col">
                    <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['email'])) echo $_POST['email'];  ?>" required name="email" id="email" class="form-control" placeholder="new email">                    </div>


            </div>


            <div class="submit-btn text-center my-5">
                <button type="submit" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
            </div>


        </form>
    </div>

</section>

