<?php
if(!empty($_POST)) {
	include 'mysql.php';
	
	$t = $_POST['title'];
	$b = $_POST['body'];
	$c = time();
	if(mysqli_query($con,"INSERT INTO posts (title,body,date) VALUES ('$t','$b','$c')"))
		echo 'Entry posted <a href="post_view.php?id='.mysqli_insert_id($con).'">View</a>';
	else
		echo mysqli_error($con);
}
?>

<form method="post">
	<table>
		<tr>
			<td><label for="title">Title</label></td>
			<td><input name="title" id="title" /></td>
		</tr>
		<tr>
			<td><label for="body">Body</label></td>
			<td><textarea name="body" id="body"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="Post" /></td>
		</tr>
	</table>
</form>