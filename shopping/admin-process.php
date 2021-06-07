<?php
require('helper.php');
if(isset($_POST['add-product'])){
    $error = array();
    $type = validate_input_text($_POST['item_brand']);
    if(empty($type)){
        $error[] = 'you forgot to enter your item brand';
    }

    $name = validate_input_text($_POST['item_name']);
    if(empty($name)){
        $error[] = 'you forgot to enter your item name';
    }

    $price = validate_input_text($_POST['item_price']);
    if(empty($price)){
        $error[] = 'you forgot to enter your item price';
    }

    $image = validate_input_text($_POST['item_image']);
    if(empty($image)){
        $error[] = 'you forgot to enter your item image';
    }
    print(count($error));
    if(empty($error)){
        $query = "INSERT INTO product(item_id, item_brand, item_name, item_price, item_image, item_register)";
        $query .= "VALUES(' ', ?,?,?,?, NOW())";
        $q = mysqli_stmt_init($con);
        mysqli_stmt_prepare($q, $query);
        mysqli_stmt_bind_param($q, 'ssss', $type, $name, $price, $image);
        $result = mysqli_stmt_execute($q);
        if($result){
            header('Location:' . $_SERVER['PHP_SELF']);
        }else{
            print('error');
        }

    }
}

if(isset($_POST['edit-product'])){
    $error_product = array();
    $id = validate_input_text($_POST['item_id']);
    if(empty($id)){
        $error_product[]='you forgot to enter id';
    }

    $brand = validate_input_text($_POST['item_brand']);
    if(empty($brand)){
        $error_product[] = 'you forgot to enter your item brand';
    }

    $item_name = validate_input_text($_POST['item_name']);
    if(empty($item_name)){
        $error_product[] = 'you forgot to enter your item name';
    }

    $item_price = validate_input_text($_POST['item_price']);
    if(empty($item_price)){
        $error_product[] = 'you forgot to enter your item price';
    }

    $item_image = validate_input_text($_POST['item_image']);
    if(empty($item_image)){
        $error_product[] = 'you forgot to enter your item image';
    }


    if(empty($error_product)){
//        print('75');
//        $query = "UPDATE product SET (item_brand, item_name, item_price, item_image) WHERE item_id='$id'";
//        $query .= "VALUES(?,?,?,?)";
//        $q = mysqli_stmt_init($con);
//        mysqli_stmt_prepare($q, $query);
//        mysqli_stmt_bind_param($q, 'ssss',$brand, $item_name, $item_price, $item_image);
//        mysqli_stmt_execute($q);
////        $edit = mysqli_query($con,"UPDATE user SET firstName='$firstName', lastName='$lastName', email='$email' WHERE user_id = '$user' ");
//        if(mysqli_stmt_affected_rows($q) == 1) {
//
//            header('Location:' . $_SERVER['PHP_SELF']);
//            exit();
//        }
//        else{
//            print 'cannot update';
//        }
        $edit = mysqli_query($con,"UPDATE product SET item_brand='$brand', item_name='$item_name', item_price='$item_price', item_image='$item_image' WHERE item_id='$id'");
        if($edit) {

            header('Location:' . $_SERVER['PHP_SELF']);
        }
    }else{
        print(count($error_product));
    }
}




