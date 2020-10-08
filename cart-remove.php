<?php
    include'includes/common.php';
    $user_id=$_SESSION['id'];
    $item_id=$_GET[$row['id']];
    $delete_query="DELETE FROM users_products WHERE user_id='$user_id' AND item_id='$item_id'";
    $delete_query_result= mysqli_query($link, $delete_query) or die(mysqli_error($link));
    header('location: cart.php');
?>