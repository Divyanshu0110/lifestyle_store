<?php
    include 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
    $id=$_SESSION['id'];
    $item_id=$_GET['$row'];
    $update_query="UPDATE users_items MODIFY status='confirmed' WHERE user_id='$id' AND item_id='$item_id'";
    $update_query_result= mysqli_query($link, $update_query) or die(mysqli_error($link));
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Products</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="CSS/index.css" type="text/css" rel="stylesheet"/>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="text-align: center;">
                    <h1> Your order is confirmed!</h1>
                    <h3>Thank you for shopping with us. <a href="products.php">Click here</a> to purchase any other item.</h3>
            </div>
        </div>    
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>