<?php
include('helper.php');
session_start();
$user = $_SESSION['user_id'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
        print('25');
        $error = array();
        $firstName = validate_input_text($_POST['firstName']);
        if(empty($firstName)){
            $error[]='you forgot to enter first name';
        }

        $lastName = validate_input_text($_POST['lastName']);
        if(empty($lastName)){
            $error[] = 'you forgot to enter your last name';
        }

        $email = validate_input_text($_POST['email']);
        if(empty($email)){
            $error[] = 'you forgot to enter your email';
        }

        if(empty($error)){


            //make a query
//        $query = "UPDATE user SET (firstName, lastName, email)";
//        $query .= "VALUES(?,?,?)";
//        $q = mysqli_stmt_init($con);
//        mysqli_stmt_prepare($q, query);
//        mysqli_stmt_bind_param($q, 'sss',$firstName, $lastName, $email);
//        mysqli_stmt_execute($q);
////        $edit = mysqli_query($con,"UPDATE user SET firstName='$firstName', lastName='$lastName', email='$email' WHERE user_id = '$user' ");
//        if(mysqli_stmt_affected_rows($q) == 1) {
//
//            header('Location:' . $_SERVER['PHP_SELF']);
//            exit();
            require('mysqli_connect.php');
            $edit = mysqli_query($con,"UPDATE user SET firstName='$firstName', lastName='$lastName', email='$email' WHERE user_id='$user'");
            if($edit) {

                header('Location: profile.php');

            }

        }else{
            print(count($error));
        }

}


?>