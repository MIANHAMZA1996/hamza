<?php
	include('1connection.php');
	$id=$_GET['id'];
	$q="SELECT * FROM signupdata WHERE id='$id'";
	$res=mysqli_query($conn,$q);
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
<body class="body" 
>
	<?php
		include('header.php');
		
	?>
<!--signup-->

<div id="login-boxsignup">
      <div class="left-box">
        <h1 class="bold1"> Sign Up</h1>
          	<form action="editupdate.php" method="POST">
          		<input type="hidden" name="id" value="<?PHP echo $row->id ?>">
	          <input type="usernamesignup" name="username" value="<?PHP echo $row->username ?>" placeholder="Username"/>
	          <input type="emailsignup" name="email"  value="<?PHP echo $row->email ?>"  placeholder="Email"/>
	          <input type="passwordsignup" name="password"  value="<?PHP echo $row->password ?>"  placeholder="Password"/>
	        
	          <input type="passwordsignup" name="password2" value="<?PHP echo $row->id ?>"  placeholder="Retype password"/>
	        	<select name="usertype" class="type"  value="<?PHP echo $row->usertype ?>"   style="width: 221px; ">
		        	<option value="AUTHOR">AUTHOR</option>
		        	<option value="READER">READER</option> 
	        	</select>       
	          <input type="submit" name="signupbutton" value="Update"/>
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