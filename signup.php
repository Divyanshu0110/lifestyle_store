<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Sign Up</title>
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
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> 
                            <h2>Sign Up</h2>
                        </div>
                        <div class="panel-body">
                            <form action="signup_submit.php" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required/>
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Contact" name="contact" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City" name="city" required/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Address" name="address" required/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="Submit">Register</button>
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            Already have an account?
                            <a href="login.php" style="color: rgb(0, 0, 255);">Login</a>
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