<?php
    
    shuffle($product_shuffle);

    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if (isset($_POST['top_sale_submit'])){
            $Cart->addToCart($_SESSION['user_id'], $_POST['item_id']);
        }


    }
?>
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme">
            <?php foreach($product_shuffle as $item){?>

            <div class="item py-2">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.jpg"; ?>" alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                        <h6><?php echo $item['item_name'] ?? "Unknown";?> </h6>
                        <div class="price py-2">
                            <span><?php echo $item['item_price'] ?? "unknown";?></span>
                        </div>
                    <form method="post">
                        <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                        <input type="hidden" name="user_id" value="<?php echo 1;?>">
                        <button type="submit" name="top_sale_submit" class='btn btn-warning font-size-12'>Add to Cart</button>
                    </form>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <!-- owl carousel -->
    </div>
</section>
<!-- Top Sale-->