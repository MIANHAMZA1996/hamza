
<?php
	include('connection.php');
	$q= "SELECT * FROM signupdata";
	$res=mysqli_query($conn, $q);
	$row=mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="icon" href="logo.png">
<head>
	<title>
		BLOG SITE
	</title>
</head>
<body class="body" 
>
	<?php
		include('header.php');

	?>	
<!--table-->	
</div>
		<!-- <a href="signup.php"><button class="newpost1">Signup</button></a> -->
	 <table style="width: 1000px; height: 400px; margin-left: 200px; font-size: 20px;
	 box-shadow: 1px 1px rgba(0, 0, 0, 0.8); margin-top: 10px; border-radius: 20px: ">
	  <tr >
	  	<th >Sr no</th>
	    <th >Username</th>
	    <th >Email</th> 
	    <th >Type</th>
	    <th >Action</th>

	  </tr>

	  <?php while ($row=mysqli_fetch_array($res)) {; ?>
	  <tr>
	  	<td style="text-align: center;"><?php echo $row['id'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['username'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['email'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['usertype'] ?></td>
	  	<td style="text-align: center;">
	  		<a href="edituser.php?id=<?php echo $row['id'] ?>" >
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px;"> Edit</button>
	  		</a>
	  		<a href="deleteuser.php?id=<?php echo $row['id'] ?>">
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px; padding: -20px;">Del</button>
	  		</a>
	  	</td>
	  </tr>
	
	<?php  } ?>
	  

	</table>
</body>
</html>
