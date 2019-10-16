<?php
	include('connection.php');
	$m= "SELECT * FROM quries";
	$res=mysqli_query($conn, $m);
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
		include('connection.php');
	?>		
<!--table-->	
</div>

	 <table style="width: 1300px; height: 400px; margin-left: 30px; font-size: 20px;
	 box-shadow: 1px 1px rgba(0, 0, 0, 0.8); margin-top: 10px; border-radius: 20px: ">
	  <tr >
	  	<th >Srno</th>
	  	<th >Firstname</th> 
	    <th >Lastname</th>
	    <th >Number</th>
	    <th >Country</th>
	    <th>Subject</th>

	  </tr>

	  <?php while ($row=mysqli_fetch_array($res)) {; ?>
	  <tr>
	  	<td style="text-align: center;"><?php echo $row['id'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['firstname'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['lastname'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['mnumber'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['country'] ?></td>
	  	<td style="text-align: center;"><?php echo $row['subject'] ?></td>
	  	<td style="text-align: center;">
	  		<a href="editcontact.php?id=<?php echo $row['id'] ?>">
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px; "> Edit</button>
	  		</a>
	  	</td>
	  	<td style="text-align: center;">
	  		<a href="deletecontact.php?id=<?php echo $row['id'] ?>">
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px;"> Del</button>
	  		</a>
	  	</td>
	  </tr>
	
	<?php  } ?>
	  

	</table>
</body>
</html>
