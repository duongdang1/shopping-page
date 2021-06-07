<?php
include ('header.php');
include ('helper.php');

if (!is_writable(session_save_path())) {
    echo 'Session path "'.session_save_path().'" is not writable for PHP!'; 
}
$user = array();
if(isset($_SESSION['user_id'])){
    require ('mysqli_connect.php');
    $user = get_user_info($con, $_SESSION['user_id']);

}else{
    print("haven't login");
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

                <div class="user-info px-3">
                    <ul class="font-ubuntu navbar-nav">
                        <div class="d-flex">
                            <li class="nav-link"><b>First Name: </b><span><?php echo isset($user['firstName']) ? $user['firstName'] : ''; ?></span></li>

                        </div>


                        <div class="d-flex">
                            <li class="nav-link"><b>Last Name: </b><span><?php echo isset($user['lastName']) ? $user['lastName'] : ''; ?></span></li>
                        </div>
                        <div class="d-flex">
                            <li class="nav-link"><b>Email: </b><span><?php echo isset($user['email']) ? $user['email'] : ''; ?></span></li>
                        </div>
                        <button type="button" id="formButton" name="change-profile-submit" class="btn font-baloo text-danger"><a href="edit-profile.php">edit profile</a></button>


                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Order History</h5>

        <!--shopping cart item-->
        <div class="row">
            <div class="col-sm-9">
                <!--cart item-->
                <?php


                foreach($product->getData('history') as $item):
                    if($item['user_id'] == $_SESSION['user_id']){
                        $cart = $product->  getProduct($item['item_id']);
                        $subTotal[] = array_map(function($item){


                            ?>
                            <div class="row border-top py-3 mt-3">
                                <div class="col-sm-2">
                                    <img src="<?php echo $item['item_image'] ??"./assets/products/1.png"?>" style="height:120px" alt="cart1" class="img-fluid">

                                </div>
                                <div class="col-sm-8 ">
                                    <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ??"Unknown" ?>"</h5>
                                    <small>by <?php echo $item['item_brand'] ?? "Brand" ?>"</small>


                                </div>

                                <div class="col-sm-2 text-right">
                                    <div class="font-size-20 text-danger font-baloo">
                                        $<span class="product_price"><?php echo $item['item_price'] ?? 0 ?>" </span>
                                    </div>
                                </div>
                            </div>

                            <!--cart item-->
                            <?php
                            return $item['item_price'];
                        },$cart);//closing array
                    }
                endforeach;
                ?>
            </div>

        </div>
    </div>
</section>
<?php
include "footer.php";
?>
