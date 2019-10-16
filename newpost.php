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
      <form action="newpostsql.php" method="POST" enctype="multipart/form-data" >
        <label >POST TITLE</label>
        <input type="text" id="fname" name="posttitle" placeholder="Your post name..">
        <label >SELECT A PICTURE</label><br>
        <input type="file" name="picture" method="FILES" class="buttonimage"><br>
        <label style="margin-top: 10px" >CATEGORY</label>
        <select id="category" name="category">
          <option value="BIKE">BIKE</option>
          <option value="SPORTS">SPORTS</option>
          <option value="FOOD">FOOD</option>
          <option value="TECHNOLOGY">TECHNOLOGY</option>
          <option value="NEPAL">NEPALI</option>
        </select>
        <label >DESCRIPTION</label>
        <textarea class="des" name="description" placeholder="Write something.." style="height:150px"></textarea>
        <input type="submit" name="submit" value="Submit">
      </form>
    </div>

</body>
</html>