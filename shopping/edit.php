<?php

include 'mysqli_connect.php';

$id = $_GET['item_id'];

$qry = mysqli_query($con, "SELECT * FROM tblemp where user_id = '$id'");

$data = mysqli_fetch_array($qry);
