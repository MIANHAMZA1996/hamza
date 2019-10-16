<?php
	include('connection.php');
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$usertype=$_POST['usertype'];
	$q="insert into signupdata(username,email,password,usertype)
	values ('$username','$email','$password','$usertype') ";


	mysqli_query($conn,$q);
	header("location:loginpage.php");


?>