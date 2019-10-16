<?php
	include('connection.php');
	$id=$_POST['id'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$mnumber=$_POST['mnumber'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];
	$q="UPDATE quries SET firstname='$firstname',lastname='$lastname', mnumber='$mnumber',country='$country', subject='$subject' 
	WHERE id='$id'";

	mysqli_query($conn,$q);
	header("location:quries.php");


?>