<?php
    if(!isset($_SESSION)){
        session_start();
    }

    $brand = array_map(function($pro){return $pro['item_brand'];}, $product_shuffle);
    $unique = array_unique($brand);
    sort($unique);
    shuffle($product_shuffle);
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(isset($_POST['special_price_submit'])){
            // call method addtocart
            $Cart->addToCart($_SESSION['user_id'], $_POST['item_id']);
        }

    }

?>

<section id="special-price " class="py-5">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special prices</h4>
        <div id="filter" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All products</button>
            <?php
                array_map(function($brand){
                    printf('<button class="btn" data-filter=".%s">%s</button>', $brand, $brand);
                },$unique);
            ?>
<!--            <button class="btn" data-filter=".Apple">Apple</button>-->
<!--            <button class="btn" data-filter=".Samsung">Samsung</button>-->
<!--            <button class="btn" data-filter=".Redmi">Redmi</button>-->
        </div>
        <div class="grid">
            <?php array_map(function($item){?>
            <div class="grid-item border <?php echo $item['item_brand'] ?? "Brand" ; ?>">
                <div class="item py-2" style='width: 200px;'>
                    <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']);?>"><img src="<?php echo $item['item_image'] ?? "./assets/products/1.jpg";?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $item['item_name'] ?? "unknown"; ?> </h6>
                            <div class="price py-2">
                                <span>$<?php echo $item['item_price']??  0 ?></span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="<?php echo $item['item_id'] ?? '1';?>">
                                <input type="hidden" name="user_id" value="<?php echo 1;?>">
                                <button type="submit" name="special_price_submit" class='btn btn-warning font-size-12'>Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <?php }, $product_shuffle) ?>
        </div>



    </div>
</section>
<!-- special price-->