<?php
    require('functions.php')
?>
<?php
    require('mysqli_connect.php');
    $user_result = mysqli_query($con,"SELECT * FROM user");
    $product_result = mysqli_query($con,"SELECT * FROM product");
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['delete-product'])){
            $deleteproduct = $product->deleteProduct($_POST['item_id']);
        }
        require('admin-process.php');
    }


?>

<!DOCTYPE html>
<html>
<head>
    <title> Retrive data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
    <!-- library bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


</head>

<body>
<br>
<br>
<div class="container">
    <div class="container-fluid ">
        <div>
            <h4>User table</h4>
        </div>
        <!-- table user all  -->
        <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0"width="100%">
            <thead>
            <tr>
                <th>user id</th>
                <th>firstName</th>
                <th>lastName</th>
                <th>Email</th>

            </tr>
            </thead>
            <tbody>

            <?php
            while($row = mysqli_fetch_array($user_result))
            {
                ?>
                <tr>
                    <td><?php echo $row["user_id"]; ?></td>
                    <td><?php echo $row["firstName"]; ?></td>
                    <td><?php echo $row["lastName"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>

                </tr>
                <?php
            }
            ?>


            </tbody>
        </table>
        <div>
            <h4>Product table</h4>
        </div>
        <table id="tableHorizontalWrapper" class="table table-striped table-bordered table-sm text-center" cellspacing="0" width="100%">
            <thead>
            <tr>

                <th>product id</th>
                <th>type</th>
                <th>name</th>
                <th>price</th>
                <th>image</th>
                <th>Delete</th>


            </tr>
            </thead>
            <tbody>
            <?php
            while($row = mysqli_fetch_array($product_result)){
                ?>
                <tr>
                    <td><?php echo $row['item_id']; ?></td>
                    <td><?php echo $row['item_brand']; ?></td>
                    <td><?php echo $row['item_name']; ?></td>
                    <td><?php echo $row['item_price']; ?></td>
                    <td><?php echo $row['item_image']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" value="<?php echo $row['item_id'];?>" name="item_id">
                            <button type="submit" name="delete-product" class="btn font-baloo text-danger">Delete</button>
                        </form>
                    </td>

                </tr>
                <?php
            }
            ?>
            <?php
            // close connection database

            ?>

            </tbody>
        </table>
        <div>
            <h4>edit</h4>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" enctype="multipart/form-data" id="log-form">
                <div class="form-row my-4">
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_id'])) echo $_POST['item_id'];  ?>" required name="item_id" id="item_id" class="form-control" placeholder="id">                    </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_brand'])) echo $_POST['item_brand'];  ?>" required name="item_brand" id="item_brand" class="form-control" placeholder="type">                    </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_name'])) echo $_POST['item_name'];  ?>" required name="item_name" id="item_name" class="form-control" placeholder="product name">                  </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_price'])) echo $_POST['item_price'];  ?>" required name="item_price" id="item_price" class="form-control" placeholder="price">                    </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_image'])) echo $_POST['item_image'];  ?>" required name="item_image" id="item_image" class="form-control" placeholder="image">                    </div>
                </div>


                <div class="submit-btn text-center my-5">
                    <button type="submit" name="edit-product" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                </div>


            </form>
        </div>
        <div>
            <h4>Add product</h4>
        </div>
        <div class="d-flex justify-content-center">
            <form method="post" enctype="multipart/form-data" id="log-form">
                <div class="form-row my-4">
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_brand'])) echo $_POST['item_brand'];  ?>" required name="item_brand" id="item_brand" class="form-control" placeholder="type">                    </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_name'])) echo $_POST['item_name'];  ?>" required name="item_name" id="item_name" class="form-control" placeholder="product name">                  </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_price'])) echo $_POST['item_price'];  ?>" required name="item_price" id="item_price" class="form-control" placeholder="price">                    </div>
                    <div class="col">
                        <input type="text" onfocus="this.value=''" value="<?php if(isset($_POST['item_image'])) echo $_POST['item_image'];  ?>" required name="item_image" id="item_image" class="form-control" placeholder="image">                    </div>
                </div>


                <div class="submit-btn text-center my-5">
                    <button type="submit" name="add-product" class="btn btn-warning rounded-pill text-dark px-5">Continue</button>
                </div>


            </form>
        </div>

</body>
</html>

