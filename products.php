<?php
    require 'includes/common.php';
    if (!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Products</title>
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
            include 'includes/check_if_added.php';
        ?>
        <div class="container">
            <div class="jumbotron" style="text-align: center;">
                    <h1>Welcome to our Lifestyle Store!</h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <div class="row text-center">
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt="cam1"/>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 80000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=1">Add to Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt="cam2"/>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=2">Add to Cart</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt="cam3"/>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=3">Add to Cart</a>
                            <?php } ?>                               
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt="cam4"/>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=4">Add to Cart</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt="watch1"/>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=5">Add to Cart</a>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt="watch2"/>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=6">Add to Cart</a>
                            <?php } ?>   
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt="watch3"/>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=7">Add to Cart</a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt="watch4"/>
                        <div class="caption">
                            <h3>Faber Luba</h3>
                            <p>Price: Rs. 18000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=8">Add to Cart</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
            </div>
    <div class="row text-center">
                <div class="col-xs-3 ">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt="shirt1"/>
                        <div class="caption">
                            <h3>H&D</h3>
                            <p>Price: Rs. 800.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=9">Add to Cart</a>
                            <?php } ?>   
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/15.jpg" alt="shirt2"/>
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=10">Add to Cart</a>
                            <?php } ?> 
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt="shirt3"/>
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=11">Add to Cart</a>
                            <?php } ?>    
                        </div>
                    </div>
                </div>
                <div class="col-xs-3">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt="shirt4"/>
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(check_if_added_to_cart(1)) { ?>
                            <button class="btn btn-primary btn-block">Already added to cart!</button>
                            <?php } else { ?>
                            <a class="btn btn-primary btn-block" href="cart-add.php?id=12">Add to Cart</a>
                            <?php } ?>    
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