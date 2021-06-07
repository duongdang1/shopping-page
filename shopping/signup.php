<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        require ('register-process.php');
    }

?>
<?php
include('./Template/_signup.php')
?>
<?php
include('footer.php');
?>