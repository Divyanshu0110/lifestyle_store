<?php
    require 'includes/common.php';
    $test_email= mysqli_real_escape_string($link, $_POST['email']);
    $test_password= mysqli_real_escape_string($link, $_POST['password']);
    $select_query="SELECT password from users WHERE email='$test_email'";
    $select_query_result= mysqli_query($link, $select_query) or die(mysqli_error($link));
    $row=mysqli_fetch_array($select_query_result);
        if (password_verify($test_password, $row['password']))
        {    
            $_SESSION['email']=$test_email;
            $_SESSION['id']= mysqli_insert_id($link);
            header('location: products.php');
        } else {
            header('location: login.php?msg');
        }
?>