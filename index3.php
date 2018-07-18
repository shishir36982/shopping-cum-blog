<?php
include 'mysql.php';

echo '<h1>My First Blog</h1>';
echo "<em>Not just another WordPress web log</em><hr/>";

$result = mysqli_query($con,'SELECT * FROM posts ORDER BY date DESC');

if(!mysqli_num_rows($result)) {
	echo 'No posts yet.';
} else {
	while($row = mysqli_fetch_assoc($result)) {
		echo '<h2>'.$row['title'].'</h2>';
		$body = substr($row['body'], 0, 300);
		echo nl2br($body).'...<br/>';
		echo '<a href="post_view.php?id='.$row['id'].'">Read More</a> | ';
		echo '<a href="post_view.php?id='.$row['id'].'#comments">'.$row['num_comments'].' comments</a>';	
		echo '<hr/>';
	}
}

echo <<<HTML
<a href="post_add.php">+ New Post</a><br/>
<small>A simple blog based on a <a href="http://programanddesign.com/?p=111" target="_blank">tutorial</a> by <a href="http://programanddesign.com/" target="_blank">Program & Design</a></small>
HTML;
