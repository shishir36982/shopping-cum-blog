<?php
include 'mysql.php';
$g = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM posts WHERE id='$g' LIMIT 1");

if(!mysqli_num_rows($result)) {
	echo 'Post #'.$_GET['id'].' not found';
	exit;
}

$row = mysqli_fetch_assoc($result);
echo '<h2>'.$row['title'].'</h2>';
echo '<em>Posted '.date('F j<\s\up>S</\s\up>, Y', $row['date']).'</em><br/>';
echo nl2br($row['body']).'<br/>';
echo '<a href="post_edit.php?id='.$_GET['id'].'">Edit</a> | <a href="post_delete.php?id='.$_GET['id'].'">Delete</a> | <a href="index.php">View All</a>';

echo '<hr/>';
$result = mysqli_query($con,"SELECT * FROM comments WHERE post_id='$g' ORDER BY date ASC");
echo '<ol id="comments">';
while($row = mysqli_fetch_assoc($result)) {
	echo '<li id="post-'.$row['id'].'">';
	echo (empty($row['website'])?'<strong>'.$row['name'].'</strong>':'<a href="'.$row['website'].'" target="_blank">'.$row['name'].'</a>');
	echo ' (<a href="comment_delete.php?id='.$row['id'].'&post='.$_GET['id'].'">Delete</a>)<br/>';
	echo '<small>'.date('j-M-Y g:ia', $row['date']).'</small><br/>';
	echo nl2br($row['content']);
	echo '</li>';
}
echo '</ol>';

echo <<<HTML
<form method="post" action="comment_add.php?id={$_GET['id']}">
	<table>
		<tr>
			<td><label for="name">Name:</label></td>
			<td><input name="name" id="name" value="{$_COOKIE['name']}"/></td>
		</tr>
		<tr>
			<td><label for="email">Email:</label></td>
			<td><input name="email" id="email" value="{$_COOKIE['email']}"/></td>
		</tr>
		<tr>
			<td><label for="website">Website:</label></td>
			<td><input name="website" id="website" value="{$_COOKIE['website']}"/></td>
		</tr>
		<tr>
			<td><label for="content">Comments:</label></td>
			<td><textarea name="content" id="content"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Post Comment"/></td>
		</tr>
	</table>
</form>
HTML;
