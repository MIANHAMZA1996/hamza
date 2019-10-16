<?php
	include('connection.php');

	//call the variables which one you want to call from database
		$username=$_POST['username'];
		$password=$_POST['password'];
		//write down the query of select and just select those of column which one you want to check
		$q="SELECT * FROM  signupdata WHERE username='$username' AND password='$password' ";
		

		$res=mysqli_query($conn,$q);
		$row=mysqli_fetch_object($res);
// IF condition for session and select the all detail against that data 
// and session as well		

		if (!empty($row)) 
		{
			//print_r($row);die;
			session_start();
				$_SESSION['id']=$row->id;
				$_SESSION['username']=$row->username;
				$_SESSION['email']=$row->email;
				$_SESSION['password']=$row->password;
				$_SESSION['type']=$row->usertype;

					//print_r($_SESSION);die;

			header("location:profile.php");
		}
		else
		{
			echo "ERROR";
			header("location:loginpage1.php");
		}	
?>

