<?php
    if(!isset($_SESSION)){
        session_start();
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset($_POST['delete-cart-submit'])){
            $deletedrecord = $Cart->deleteCart($_POST['item_id']);
        }
    }
?>


<section id="cart" class="py-3 mb-5">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!--shopping cart item-->
        <div class="row">
            <div class="col-sm-9">
                <!--cart item-->
                <?php


                    foreach($product->getData('cart') as $item):
                        if($item['user_id'] == $_SESSION['user_id']){
                            $cart = $product->  getProduct($item['item_id']);
                            if($_SERVER['REQUEST_METHOD'] == "POST"){
                                if (isset($_POST['purchase_submit'])){

                                    $Order->addToOrder($_SESSION['user_id'], $item['item_id']);
                                    $deleted = $Cart->deleteCart($item['item_id']);

                                }

                                // call method addtoorder

                            }
                            $subTotal[] = array_map(function($item){


                ?>
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="<?php echo $item['item_image'] ??"./assets/products/1.png"?>" style="height:120px" alt="cart1" class="img-fluid">

                    </div>
                    <div class="col-sm-8 ">
                        <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ??"Unknown" ?>"</h5>
                        <small>by <?php echo $item['item_brand'] ?? "Brand" ?>"</small>
                        <form method="post">
                            <input type="hidden" value="<?php echo $item['item_id'] ?? 0; ?>" name="item_id">
                            <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger">Delete</button>
                        </form>

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
            <div class="col-sm-3">
                <!--subtotal-->
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-size-12 font-rale text-success py-3">Your order is eligible for free shipping</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-20">Subtotal ( <?php echo isset($subTotal) ? count($subTotal) : 0; ?> item):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal):0 ?></span></h5>
                        <form method="post">
                            <button type="submit" name="purchase_submit" class="btn btn-warning mt-3">Buy</button>
                        </form>
                    </div>
                </div>

                <!--subtotal-->
            </div>
        </div>
    </div>
</section>