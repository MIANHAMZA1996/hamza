
<link rel="stylesheet" type="text/css" href="index.css">

<div class="main" style="" style="border-radius:60px">
<!--header-->
		<div class="header" >
<!--image-->
			<div class="logopic" >
				<a href="check.php">
					<img src="logo.png" 
					class="logopic1">
				</a>
			</div>			
<!--Menu-->
<?php 
	session_start();

	//print_r($_SESSION);
	if (!empty($_SESSION && $_SESSION['type']=='AUTHOR')) 
	{?>
		<div class="menu" >
			<a href="check.php" class="home">Home</a>&nbsp
			<a href="about US.php" class="home" >About</a>&nbsp
			<a href="contact us.php" class="home" >Contact</a>&nbsp
			<a href="post.php" class="home" >Posts</a>&nbsp
			<a href="category.php" class="home" >Category&nbsp</a>
			<a href="allusers.php" class="home" >Users&nbsp</a>
			<a href="quries.php" class="home" >Quries</a>
		</div>
		<div class="login">
				<a href="logout.php" class="login1"> Logout</a>			
		</div>
<?php 
}
	elseif(!empty($_SESSION && $_SESSION['type']=='READER')) 
	{ ?>
		<div class="menu" >
			<a href="check.php" class="home">Home</a>&nbsp
			<a href="about US.php" class="home" >About</a>&nbsp
			<a href="contact us.php" class="home" >Contact</a>&nbsp
			<a href="category.php" class="home" >Category&nbsp</a>

			<div class="login">
				<a href="logout.php" class="login1"> Logout</a>			
		</div>
<?php
	}
	else{?>
		<div class="menu">
		<a href="check.php" class="home">Home</a>&nbsp
			<a href="about US.php" class="home" >About</a>&nbsp
			<a href="contact us.php" class="home" >Contact</a>&nbsp
			<a href="category.php" class="home" >Category&nbsp</a>
			
			<div class="login">
				<a href="signup.php" class="login1" >Sign up</a> 		
			</div>
			<div class="login">
				<a href="loginpage.php" class="login1"> Login</a>
			</div>
<?php			
	}
?>



	</div>	
</div>










<!-- 
		<div class="menu" >
			<a href="check.php" class="home">Home</a>&nbsp
			<a href="about US.php" class="home" >About</a>&nbsp
			<a href="contact us.php" class="home" >Contact</a>&nbsp
			<a href="post.php" class="home" >Posts</a>&nbsp
			<a href="category.php" class="home" >Category&nbsp</a>
			<a href="allusers.php" class="home" >Users&nbsp</a>
			<a href="quries.php" class="home" >Quries</a>
	
			<div class="login">
				<a href="signup.php" class="login1">Sign up</a> 
			</div>
			<div class="login">
				<a href="loginpage.php" class="login1"> Login</a>			
			</div>
		</div>	 -->