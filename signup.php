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
<!--signup-->

<div id="login-boxsignup">
      <div class="left-box">
        <h1 class="bold1"> Sign Up</h1>
          	<form action="signupdata.php" method="POST">
	          <input type="usernamesignup" name="username" placeholder="Username"/>
	          <input type="emailsignup" name="email" placeholder="Email"/>
	          <input type="passwordsignup" name="password" placeholder="Password"/>
	        
	          <input type="passwordsignup" name="password2" placeholder="Retype password"/>
	        	<select name="usertype" class="type"  style="width: 221px; ">
		        	<option name="author" value="AUTHOR">AUTHOR</option>
		        	<option name="reader" value="READER">READER</option>
		        	<option name="reader" value="ADMIN">ADMIN</option> 
	        	</select>       
	          <input type="submit" name="signupbutton" value="Sign Up"/>
      		</form>  
        </div>
        <div class="right-box">

          <span class="signinwith">Sign in with<br/>Social Network     </span>
        
        <button class="social facebook">Log in with Facebook</button>    
        <button class="social twitter">Log in with Twitter</button> 
        <button class="social google">Log in with Google+</button> 
            
        
        </div>
        <div class="or">OR</div>
    </div>
</body>
</html>