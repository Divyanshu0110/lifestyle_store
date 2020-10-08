<?php
    require 'includes/common.php';
    $name= mysqli_real_escape_string($link, $_POST['name']);
    $email= mysqli_real_escape_string($link, $_POST['email']);
    $password= $_POST['password'];
    $password_hashed= password_hash($password, PASSWORD_BCRYPT);
    $contact= mysqli_real_escape_string($link, $_POST['contact']);
    $city= mysqli_real_escape_string($link, $_POST['city']);
    $address= mysqli_real_escape_string($link, $_POST['address']);  
    $mysqli_insert_query="INSERT INTO users(name,email,password,contact,city,address) values('$name','$email','$password_hashed','$contact','$city','$address')";
    $mysqli_insert_query_result= mysqli_query($link, $mysqli_insert_query) or die(mysqli_error($link));
    header('location: success_signup_intermediate.php');
?>