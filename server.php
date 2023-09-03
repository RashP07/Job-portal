<?php
session_start();
$username = "";
$email = "";
$errors = array();
$_SESSION['success'] = "";
$db = mysqli_connect('localhost', 'root', '', 'register');
if (isset($_POST['reg_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	if (empty($username)) { array_push($errors, "Username is required"); }
	if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($mobile)) { array_push($errors, "Phone number is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }

	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
	if (count($errors) == 0) {
		$password = md5($password_1);
		$query = "INSERT INTO users (username, email,mobile, password)
				VALUES('$username', '$email','$mobile', '$password')";
		
		mysqli_query($db, $query);
		$_SESSION['username'] = $username;
		
		$_SESSION['success'] = "You have logged in";
	
		header('location: index.php');
	}
}

// User login
if (isset($_POST['login_user'])) {
	
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
	if (count($errors) == 0) {
		$password = md5($password);
		
		$query = "SELECT * FROM users WHERE username=
				'$username' AND password='$password'";
		$results = mysqli_query($db, $query);
		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
	
			$_SESSION['success'] = "You have logged in!";
			
			header('location: dashboard.php');
		}
		else {
			array_push($errors, "Username or password incorrect");
		}
	}
}
?>