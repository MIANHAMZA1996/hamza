<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="index.css">
<link rel="icon" href="logo.png">
	<head>
		<title>
			BLOG SITE
		</title>
	</head>
<body  class="body" >

<!--PHP-->
	<?php
	 include('header.php');
	 include ('connection.php');
	 $q="SELECT * FROM newpost"; 
	 $res=mysqli_query($conn,$q);

	?>

<!-- <div style="height: 600px;">
	


</div>
 -->


<!--1content-->
<div class="content1">
	<?php
		while ($row=mysqli_fetch_array($res)) {?>
				<a href="" class="title1">
				<?php echo $row['posttitle']?>
				</a>
</div>

<div class="img1">
	<img src="uploads/<?php echo $row['picture']?>" class="pic" >
</div>



<div class="text1">
	
		<p class="para1">
			<?php echo $row['description'] ?>
			<a href="readmore.php?post_id=<?php echo($row[id]) ?> ">Read More </a>
		</p>
		
</div>

	<?php 	}
	?>


<!--2content-->

<!-- <div class="content2" >
 		<u>What is Blogs?</u>
	
</div>

<div class="img2" >
	<img class="pic" src="blog1.jpg" >

</div>


<div class="text2" >
	<div class="heading2" >
		WRITING A GOOD BLOG
	</div>
		<p class="para2" >
			Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an entry online. People who write blogs are commonly called bloggers. Bloggers, tongue in cheek, call themselves and their blogs the blogosphere.
		</p>
		<p class="para2" >
			Blogs are a great way to keep everyone in a family abreast of the latest family news without running up the phone bill — you can simply read back over important updates to find out the latest news. In addition, many blogs are being used to host photographs, and their chronological structure can be a great way to keep track of a baby’s growth, a trip, or the process of planning a wedding.
		</p>
</div>
 -->
<!--3content-->
<!-- <div class="title3" >
	<u>What is Blogs?</u>
	
</div>

<div class="img3" >
    <img class="pic" src="blog1.jpg" 
    	style="
    			width: 700px; 
    			height: 500px;"
    >

</div>
<div class="text3" >
	<div class="heading3" >
		WRITING A GOOD BLOG
	</div>
		<p class="para3" >
			Blogs, or Web logs, are online journals that are updated frequently, sometimes even daily. An update, (also called an entry or a post) is usually quite short, perhaps just a few sentences, and readers can often respond to an entry online. People who write blogs are commonly called bloggers. Bloggers, tongue in cheek, call themselves and their blogs the blogosphere.
		</p>
		<p class="para3" >
			Blogs are a great way to keep everyone in a family abreast of the latest family news without running up the phone bill — you can simply read back over important updates to find out the latest news. In addition, many blogs are being used to host photographs, and their chronological structure can be a great way to keep track of a baby’s growth, a trip, or the process of planning a wedding.
		</p>
</div>

 -->


<div class="footer" > 

			 &copy;Copyrights | MIAN HAMZA
</div>
		
</body>
</html>