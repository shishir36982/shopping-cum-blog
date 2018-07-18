<?php
include 'mysql.php';

$expire = time()+60*60*24*30;
setcookie('name', $_POST['name'], $expire, '/');
setcookie('email', $_POST['email'], $expire, '/');
setcookie('website', $_POST['website'], $expire, '/');

$a=$_GET['id'];
$b=$_POST['name'];
$c= $_POST['email'];
$d= $_POST['content'];
$e=time();
$f=$_POST['website'];



mysqli_query($con,"INSERT INTO comments (post_id,name,email,website,content,date) VALUES ('$a', '$b', '$c','$f', '$d', '$e')");
	
mysqli_query($con,"UPDATE posts SET num_comments=num_comments+1 WHERE id='$a' LIMIT 1");
redirect('post_view.php?id='.$_GET['id'].'#post-'.mysqli_insert_id($con));