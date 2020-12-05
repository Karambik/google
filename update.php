<?php 
	$con = mysqli_connect('127.0.0.1', 'root','','gegle');
	mysqli_query($con, "UPDATE users SET name='{$_GET['name']}', password='{$_GET['password']}', email='{$_GET['email']}' WHERE id='{$_GET['id']}'");
	header("Location:index.php")
 ?>