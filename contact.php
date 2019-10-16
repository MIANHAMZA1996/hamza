<?php
	include('connection.php');
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$number=$_POST['number'];
	$country=$_POST['country'];
	$subject=$_POST['subject'];
	$m="insert into quries(firstname,lastname,number,country,subject)
	values ('$firstname','$lastname','$number','$country','$subject') ";


	mysqli_query($conn,$m);
	header("location:contact us.php");


?>