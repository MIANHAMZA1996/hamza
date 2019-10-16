<?php

  include('connection.php');
  $id=$_GET['id'];
  $n="SELECT * FROM newpost WHERE id='$id'";
  $res=mysqli_query($conn,$n);
  $row=mysqli_fetch_object($res);
  

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
<body  class="body" 
>
	<?php
		include('header.php');
    include('connection.php');
	?>	

<div class="column">
      <form action="updatenewpost.php" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?PHP echo $row->id ?>">
        <label >POST TITLE</label>
        <input type="text" id="fname" name="posttitle" placeholder="Your post name.." value="<?PHP echo $row->posttitle ?>" >
        <label >SELECT A PICTURE</label><br>
        <input type="file" name="picture" method="FILES" class="buttonimage" ><br>
        <label style="margin-top: 10px" >CATEGORY</label>
             
        <select id="category" name="category" value="<?PHP echo $row->category ?>">
          <option value="BIKE">BIKE</option>
          <option value="SPORTS">SPORTS</option>
          <option value="FOOD">FOOD</option>
          <option value="TECHNOLOGY">TECHNOLOGY</option>
          <option value="NEPAL">NEPALI</option>
        </select>
        <label >DESCRIPTION</label>
        <textarea class="des" name="description" placeholder="Write something.." style="height:150px" value="<?PHP echo $row->description ?>"></textarea>
        <input type="submit" name="submit" value="update">
      </form>
    </div>

</body>
</html>