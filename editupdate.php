<?php
	include('connection.php');
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
	$q="UPDATE signupdata SET username='$username',email='$email',password='$password',usertype='$usertype' WHERE id='$id'";

	mysqli_query($conn,$q);
	header("location:allusers.php");


?>