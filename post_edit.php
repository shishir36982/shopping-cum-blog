<?php
include 'mysql.php';
	$t = $_POST['title'];
	$b = $_POST['body'];
	$c = time();
	$d= $_GET['id'];
if(!empty($_POST)) {
	if(mysqli_query($con,"UPDATE posts SET title='$t', body='$b', date='$c' WHERE id='$d'"))
		redirect('post_view.php?id='.$_GET['id']);
	else
		echo mysqli_error($con);
}

$result = mysqli_query($con,"SELECT * FROM posts WHERE id='$d'");

if(!mysqli_num_rows($result)) {
	echo 'Post #'.$_GET['id'].' not found';
	exit;
}

$row = mysqli_fetch_assoc($result);

echo <<<HTML
<form method="post">
	<table>
		<tr>
			<td><label for="title">Title</label></td>
			<td><input name="title" id="title" value="{$row['title']}" /></td>
		</tr>
		<tr>
			<td><label for="body">Body</label></td>
			<td><textarea name="body" id="body">{$row['body']}</textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Save"/></td>
		</tr>
	</table>
</form>
HTML;
