<?php
	include('connection.php');
	$id=$_POST['id'];
	$posttitle=$_POST['posttitle'];
	$picture=$_POST['picture'];
	$category=$_POST['category'];
	$description=$_POST['description'];
	$q="UPDATE newpost SET posttitle='$posttitle',picture='$picture',category='$category',description='$description' WHERE id='$id'";


	mysqli_query($conn,$q);
	header("location:post.php");

?>