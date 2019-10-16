<?php
	include('connection.php');
	$id=$_GET['id'];
	$q="DELETE FROM  newpost WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:post.php");

?>