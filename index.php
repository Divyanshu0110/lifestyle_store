<?php
    require 'includes/common.php';
    if (isset($_SESSION['email']))
    {
        header('location: products.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store</title>
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
        <div class="container">
            <div class="row">
            <div id="banner-image">
                    <div class="container">
                        <div id="banner-content">
                            <h1>We Sell Lifestyle</h1>
                            <p>Flat 40% OFF on premium sales</p>
                            <a  class="btn btn-danger btn-lg active" href="products.php">Shop Now</a>
                        </div>
                    </div>
            </div>
            </div>    
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>