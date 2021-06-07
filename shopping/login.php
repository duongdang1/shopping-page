<?php
    include('helper.php');
?>
<?php
    $user = array();
    require ('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require('login-process.php');
    }

?>
<?php
    include('./Template/_login.php')
?>


<?php
    include('footer.php');
?>