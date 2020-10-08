<?php
    function check_if_added_to_cart($item_id)
    {   
        $link= mysqli_connect("localhost", "root", "toor", "lifestyle_store") or die(mysqli_error($link));
        $user_id=$_SESSION['id'];
        $select_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
        $select_query_result= mysqli_query($link, $select_query) or die(mysqli_error($link));
        $mysqli_row= mysqli_fetch_row($select_query_result);
            if ($mysqli_row>=1)
            {
                return 1;
            } else {
                return 0;
            }
    }
?>
