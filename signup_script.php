<?php

$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
$email = $_POST['email'];
$name = $_POST['name'];

$phone = $_POST['phone'];
$password = $_POST['password'];
$city = $_POST['city'];
$address=$_POST['address'];
$select_query = "SELECT id, email FROM users where email='$email' and password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$total_rows_fetched = mysqli_num_rows($select_query_result);
if($total_rows_fetched==0){
   $user_registration_query = "insert into users(name, email,password, contact, city, address) values ('$name', '$email','$password', '$phone', '$city', '$address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));

$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
 header('location: products.php');
}
else {
header('location: index.php?email_error=already registered');
}
?>