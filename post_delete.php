<?php
include 'mysql.php';
$a=$_GET['id'];
mysqli_query($con,"DELETE FROM posts WHERE id='$d' LIMIT 1");
mysqli_query($con,"DELETE FROM comments WHERE post_id='$a' ");
redirect('index3.php');