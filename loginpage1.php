
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


<!--loginform-->
<div>
    <h1 style="color: red">Your Username and Password didn't Match</h1>
</div>
<div class="loginbox"  style="box-shadow:  0 2px 4px rgba(0, 0, 0, 0.8);margin-top: 25px;">
   <a href=""> <img src="1.png" class="contactimg"></a>
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            <p>Username</p>
            <input type="username" name="username" placeholder="Enter Your Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Your Password">
            <input type="submit" name="signupbutton" value="Login"/><br>
            <a href="#">Lost your password?</a><br>
            <a href="signup.php">Don't have an account?</a>
        </form>
        
    </div>




</body>
</html>

