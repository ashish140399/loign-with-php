<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		My Portal

	</title>
</head>
<link rel="stylesheet" type="text/css" href="css/index_style.css">
<body id="login_body">
<form method="post" action="Login.php">
<fieldset>
	<img src="images/img_avatar1.png" id="login_image">
	<legend>My Portal</legend>
	<input type="box" name="email" placeholder="E-mail" id="box1"><span class="error"> <?php echo $emailErr;?></span><br><br><br>
	<input type="password" name="password1" placeholder="passwored" id="box2"><span class="error"> <?php echo $passwordErr;?></span>
	<div class="login_problems">
		
		<div style="margin-top: 3%;">
		<a href="signup.php" >First time here? Sign up now.</a>
		</div>
	</div>
	<button type="submit" name="login">
		Submit
	</button>
</fieldset>
</form>
</body>
</html>