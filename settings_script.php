<?php
    include 'includes/common.php';
    $email=$_SESSION['email'];
        if(!isset($email))
    {
        header('location: index.php');
        die();
    }
    $password_old=$_POST['password_old'];
    $password_new=$_POST['password_new'];
    $password_new_again=$_POST['password_new_again'];
    $select_query="SELECT password from users WHERE email='$email'";
    $select_query_result= mysqli_query($link, $select_query) or die(mysqli_error($link));
    $row=mysqli_fetch_array($select_query_result);
    $check=0;   
        if(strlen($password_old)=== strlen($password_new))
        {
            if (password_verify($old_password, $row['password']))
            {
                $hashed_pass_updated= password_hash($passowrd_new, PASSWORD_BCRYPT);
                $update_query="UPDATE users MODIFY password='$hashed_pass_updated'";
                $update_query_result= mysqli_query($link, $update_query) or die(mysqli_error($link));
                $check=1;
            }
        }
        if($check==1)
        {
            header('location: settings.php?user=one');
        } else {
            header('location: settings.php?user=two');
        }
?>
