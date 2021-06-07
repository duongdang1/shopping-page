<?php
require('database/Order.php');
require('database/DBController.php');

//require Product Class
require('database/Product.php');

require('database/Cart.php');
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();
$Order = new Order($db);
//Cart object
$Cart = new Cart($db);
?>

