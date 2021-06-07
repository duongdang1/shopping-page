<?php

    include('helper.php');
    ?>
<?php
    $user = array();
    require('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('admin-login-process.php');
    }
    ?>
<?php
include('./Template/_admin-login.php');
?>
