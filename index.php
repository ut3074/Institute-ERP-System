<?php
require 'database/config.php';
session_start();
?>
<!DOCTYPE HTML>
<html>

<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>
		Login
	</title>
</head>

<body background="city.jpg" ; style="background-repeat:no-repeat;
background-repeat: no-repeat;
background-size: cover;">
	<nav class="navbar p-0 m-0" style="background-color: #e9ecef;">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php">
				<img src="./logo\logo.png" alt="Logo" width="50vw" height="40vh" class="d-inline-block align-text-top">
			</a>
		</div>
	</nav>

	<div id="Mainwrapper">
		<form method="post" enctype="multipart/form-data">
			<table align="center" style="color:white;background-color: #f0f8ff3b;width:40vw;height:40vh;position:relative;top:26vh;" border="1">
				<tr>
					<td style="position:relative;top:2px;left:105px;bottom:5px;background-color:#1e2450e8;">
						<center>
							<h3>Login Form</h3>
						</center>
					</td>
				</tr>
				<tr>
					<td>
						<center>Username</center>
					</td>
					<td><input type="text" name="username" placeholder="type your username" /></td>
				</tr>
				<tr>
					<td>
						<center>Password</center>
					</td>
					<td><input type="password" name="password" placeholder="type your password" /></td>
				</tr>
				<tr>

					<td>
						<center><input type="submit" name="SignIn" value="Login" style="background-color:#1987548a;color:white;width:10vw;height:40px;position:relative;top:5px;font-size:23px;border-radius:9px;" /></center>
					</td>

					<td>
						<center><a href="signup.php"><input type="button" name="signup" value="Sign Up" style="background-color:#1987548a;color:white;width:10vw;height:40px;position:relative;top:5px;font-size:22px;border-radius: 9px;" /></a></center>
					</td>
				</tr>
			</table>
		</form>
	</div>
</body>
<footer class="bg-light text-center text-lg-start fixed-bottom">
	<div class="text-center p-3 fixed-bottom" style="background-color: rgb(247 227 227 / 40%);">
		© 2023 Copyright:
		<a class="text-dark" href="index.php">Institute ERP System.com</a>
	</div>
</footer>

</html>
<?php
if (isset($_POST['SignIn'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$query1 = "select * from admin where username='$username' AND password='$password'";
	$runquery1 = mysqli_query($con, $query1);
	if (mysqli_num_rows($runquery1) > 0) {
		header('location:Mainpage.php');
		$_SESSION['username'] = $username;
	} else {
		echo '<script>alert("Invalid username and password")</script>';
	}
}
?>