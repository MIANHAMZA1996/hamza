<?php
	include('connection.php');
	$n= "SELECT * FROM newpost";
	$res=mysqli_query($conn, $n);
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

		<a href="newpost.php"><button class="newpost" style="margin-left: 1180px;">Create New Post</button></a>
	 <table style="width: 1300px; height: 400px; margin-left: 30px; font-size: 20px;
	 box-shadow:   1px 1px rgba(0, 0, 0, 0.8); margin-top: 10px; border-radius: 20px; border:1px solid #9b9393;" >
	  <tr >
	  	<th >Sr no</th>
	    <th >Post Title</th>
	    <th >Image</th> 
	    <th>Category</th>
	    <th >Description</th>
	    <th >Action</th>
	  </tr>
	  <?php while ($row=mysqli_fetch_array($res)) {; ?>
	  <tr>
	  	<td style="text-align: center;"><?php echo $row['id']; ?></td>
	  	<td style="text-align: center;"><?php echo $row['posttitle']; ?></td>
	  	<td style="text-align: center;">
	  		<img src="uploads/<?php echo $row['picture']; ?>" width=100px; height=50px;/>
	  	</td>
	  	<td style="text-align: center;"><?php echo $row['category']; ?></td>
	  	<td style="text-align: center;"><?php echo $row['description']; ?></td>
	  	
	  	<td >
	  		<a href="editnewpost.php?id=<?php echo $row['id'] ?>">
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px;"> Edit</button>
		  	</a>
		 </td>
	  	
	  	<td >
	  		<a href="deletepost.php?id=<?php echo $row['id'] ?>">
	  			<button style=" background-color: #2D3136; color: white; border-radius: 10px;"> Delete</button>
	  		</a>
	  	</td>
	  </tr>
	  <?php  } ?>	
	</table>
</body>
</html>
