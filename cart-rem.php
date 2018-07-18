<?php


include 'common.php';
$item_id=$_GET['id'];

$user_id=$_SESSION['id'];

$select_query = "DELETE FROM users_items where item_id = '$item_id'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
 header('location: products.php');
?>