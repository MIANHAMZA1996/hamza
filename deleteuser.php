<?php
	include('connection.php');
	$id=$_GET['id'];
	$q="DELETE FROM  signupdata WHERE id='$id'";
	$res=mysqli_query($conn,$q);

	header("location:allusers.php");

?>