<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Login</title>
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
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> 
                            <h2>Login</h2>
                        </div>
                        <div class="panel-body">
                            <?php
                            if(isset($_GET['msg']))
                            {
                                echo "<i>Wrong email or password, please try again!</i>";
                            } else {
                            ?>
                            <p class="text-danger"><i>Login to make a purchase!</i></p>
                            <?php
                            }
                            ?>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="email" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="password" required/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit">Login</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Don't have an account?
                            <a href="signup.php" style="color: rgb(0, 0, 255);">Register</a>
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

