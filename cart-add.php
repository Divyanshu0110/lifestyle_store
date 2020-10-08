<?php
    include 'includes/common.php';
    $item_id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $mysqli_insert_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $mysqli_insert_query_result= mysqli_query($link, $mysqli_insert_query) or die(mysqli_error($link));
    header('location: products.php');
?>