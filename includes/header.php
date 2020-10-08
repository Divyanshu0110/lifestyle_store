<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNavBar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Lifestyle Store</a>
        </div>
        <div class="navbar navbar-collapse navbar-right" id="myNavBar">
            <ul class="nav navbar-nav">
                <?php
                    if (isset($_SESSION['email'])) {
                ?>
                <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span>Cart </a></li>
                <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span>Settings</a></li>
                <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span>Logout</a></li>
                <?php
                    } else {
                ?>
                <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
                <?php
                }
                ?></ul>
        </div>
    </div>    
</nav>