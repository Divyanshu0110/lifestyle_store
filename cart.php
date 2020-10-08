<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
    $user_id=$_SESSION['id'];
    $select_query="SELECT * FROM users_products u_p INNER JOIN users_items u_i ON u_p.id=u_i.user_id WHERE user_id='$user_id" or die(mysqli_error($link));
    $select_query_result= mysqli_query($link, $select_query);
    $mysqli_rows= mysqli_fetch_row($select_query_result);
    $sum=0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Cart</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="CSS/index.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container" style="width: 50%;">    
            <?php
                if($mysqli_rows==0)
                {
            ?>        
            <center>
                <h4>Please add to cart first!</h4>
                <a href="products.php" class="btn btn-block btn-primary">Back to Shopping</a>
            </center>
            <?php
                include 'includes/footer.php';
                die();
                } else {
                        while($row = mysqli_fetch_array($select_query_result)) {
                        $sum=$sum+$row['price'];
                        $id=$row['item_id'].",";
            ?>
            <table class="table table-bordered text-center table-striped">
                <tbody>
                    <tr><th>Item Number</th><th>Item Name</th><th>Price</th><th></th></tr>
                    <tr><th><?php echo $row['id']; ?></th><th><?php echo $row['price']; ?></th><th></th><th><a href="cart-remove.php?id={$row['id']}"> Remove</a></th></tr>
            <?php 
                        }
                }    
            ?>                     
                    <tr><th></th><th>Total:</th><th>Rs. <?php echo $sum; ?></th><th><a href="success.php?={$id}" class="btn btn-primary btn-block">Confirm Order</a></th></tr>
                </tbody>
            </table>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>