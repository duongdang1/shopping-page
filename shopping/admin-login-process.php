<?php
$error_login = array();

$email = validate_input_email($_POST['email']);
if (empty($email)){
    $error_login[] = "You forgot to enter your Email";
}

$password = validate_input_text($_POST['password']);
if (empty($password)){
    $error_login[] = "You forgot to enter your password";
}

if(empty($error_login)) {
    // sql query
    $query = "SELECT email, password FROM admin WHERE email=?";
    $q = mysqli_stmt_init($con);
    mysqli_stmt_prepare($q, $query);
    mysqli_stmt_bind_param($q, 's', $email);
    mysqli_stmt_execute($q);
    $result = mysqli_stmt_get_result($q);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    if (!empty($row)) {
        // verify password
        if ($password == $row['password']) {
            header("location: admin-panel.php");
            exit();
        }
    } else {
        print "You are not authorized";
    }
}else{
    print('not available');
}
?>




