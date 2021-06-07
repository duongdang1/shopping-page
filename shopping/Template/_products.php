<!--product-->
<?php
    if(!isset($_SESSION)){
        session_start();
    }
    $item_id = $_GET['item_id'] ?? 1;
    foreach($product->getData() as $item):
        if($item['item_id'] == $item_id):

?>
<section id="product" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img
                    src="<?php echo $item['item_image'] ??"./assets/products/1.png"?>"
                    alt="product"
                    class="img-fluid"
                />
                <div class="form-row pt-4 font-size-16 font-baloo">
                    <div class="col">
                        <button type="submit" class="btn btn-danger form-control">
                            Proceed to buy
                        </button>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-warning form-control">
                            add to cart
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 py-5">
                <h5 class="font-baloo font-size-20"><?php echo $item['item_name']??"Unknown";?></h5>
                <small>by <?php echo $item['item_brand']??"Brand";?></small>
                <hr class='m-0'>

                <!-- product price -->
                <table class="my-3">

                    <tr class="font-rale font-size-14">
                        <td>Deal Price:</td>
                        <td class="font-size-20 text-danger">$<span><?php echo $item['item_price']??"0";?></span><small class="text-dark font-size-12">&nbsp;&nbsp;inclusive of all taxes</small></td>
                    </tr>

                </table>
                <!-- product price -->
            </div>

            <div class="col-12 py-5">
                <h6 class="font-rubik">Product description</h6>
                <hr>
                <p class="font-rale font-size 14">Using Lorem ipsum to focus attention on graphic elements in a webpage design proposal In publishing and graphic design , Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content</p>
            </div>


        </div>
    </div>
</section>

<?php
    endif;
    endforeach;
?>