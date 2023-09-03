<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Login Form
	</title>
	<style>
  <?php include "style.css" ?>
</style>
</head>
<body>
	<div class="header" style="background:  #4d0d0c;">
		<h2>Login Here!</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Enter Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Enter Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn"
						name="login_user" style="background: #4d0d0c;">
				Login
			</button>
		</div>
		<p>
			New Here?
			<a href="register.php">
				Click here to register!
			</a>
		</p>
</form>
</body>

</html>
