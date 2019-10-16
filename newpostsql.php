<?php
	include('connection.php');

if(!empty($_FILES['picture']['name'])){
   $name=$_FILES['picture']['name'];
 
  //echo $_FILES['picture']['tmp_name'];die;

  move_uploaded_file($_FILES['picture']['tmp_name'],'uploads/'.$name);
$img='name';
 }else{

 	$img='0';
 }

	$posttitle=$_POST['posttitle'];
	
	$category=$_POST['category'];
	$description=$_POST['description'];
	$n="INSERT INTO newpost(posttitle,picture,category,description)
	values ('$posttitle','$img','$category','$description') ";

	mysqli_query($conn,$n);
	header("location:post.php");

	

?>
