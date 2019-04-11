<?php include_once("server.php") ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Signup Portal
	</title>
</head>
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<body id="login_body">
<form method="post" action="signup.php">
<fieldset class="signup_fieldset">
	<img src="images/img_avatar1.png" id="login_image">
	<legend>My Portal</legend>
    <label>Username</label>
	<input type="text" name="username" placeholder="Enter Userame" id="box12"><span class="error"><?php echo $nameErr;?></span><br>
	<label>E-mail</label><br>
	<input type="email" name="email" placeholder=" Enter E-mail" id="box12"><span class="error"> <?php echo $emailErr;?></span><br>
	<label>Password</label><br>
	<input type="password" name="password1" placeholder="Password" id="box12"><span class="error"><?php echo $passwordErr;?></span><br>
	<label>Confirm Password</label><br>
	<input type="password" name="password2" placeholder="Confirm Password" id="box12"><span class="error"><?php echo $dnmErr;?></span><br>
	<button  type="submit" name="register_user">
		Sign up
	</button>
	<div class="login_problems">
	<div style="margin-top: 4%;">
		<a href="Login.html" >Already have an account? Log in.</a>
		</div>
	</div>
</fieldset>
</form>
</body>
</html>