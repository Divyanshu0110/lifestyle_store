<?php
    include 'includes/common.php';
    if(!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
?>    
<!DOCTYPE html>
<html>
    <head>
        <title>Lifestyle Store - Settings</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link href="CSS/index.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css"/>
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js" ></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </head>
        <?php
            include 'includes/header.php';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading"> 
                            <h2>Change Password</h2>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="settings_script.php">
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_old" required placeholder="Old Password"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_new" placeholder="New Password"/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_new_again" placeholder="Re-enter New Password"/>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="newpassword">Change</button>
                                    <?php
                                        if($_GET['user']=='one')
                                        {
                                    ?>
                                    <p><i>Password changed successfully!</i></p>
                                    <?php
                                    } else if($_GET['user']=='two') {
                                    ?>
                                    <p><i>Passwords do not match, please try again.</i></p>
                                    <?php
                                        } else {
                                    ?>
                                    <p><i>Enter all fields to change your password!</i></p>
                                    <?php
                                        }
                                    ?>    
                                </div>
                            </form>
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