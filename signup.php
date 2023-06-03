<?php
require 'database/config.php';
?>

<!DOCTYPE HTML>
<html>

<head>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<title>
		Register
	</title>
</head>


<body background="reg_back.jpg" style="margin:0;
padding:0;
background-repeat:no-repeat;
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
			<table align="center" style="color:white;width:80vw;height:70vh;position:relative;top:6vh;" border="1">
				<tr>
					<td style="
						position:relative;top:2px;left:32.5vw;bottom:5px;background-color:rgba(0,0,0,0.2);">
						<center>
							<h3>Register Now</h3>
						</center>
					</td>
				</tr>



				<tr>
					<span>
						<td>
							<center>First Name</center>
						</td>
						<td><input type="text" name="firstname" placeholder="Enter your First Name" /></td>
						<td>
							<center>Last Name</center>
						</td>
						<td><input type="text" name="lastname" placeholder="Enter your Last Name" /></td>
					</span>
				</tr>

				<tr>
					<span>
						<td>
							<center>Gender</center>
							<select name="gender" id="gender" style=" position:relative; left:17.6vw; top:-2vh;">
								<option value="no-selected">Select your Gender</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
								<option value="intersex">Intersex</option>
							</select>
						</td>
						<td>
							<center style=" position:relative; left:18.6vw;">Date Of Birth</center>
						</td>
						<td><input type="date" name="dob" placeholder="Enter your D.O.B" style=" position:relative; left:18vw;" /></td>
					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center>Email Id</center>
						</td>
						<td><input type="text" name="emailid" placeholder="Enter your Email Id" /></td>
						<td>
							<center>Phone No</center>
						</td>
						<td><input type="int" name="phoneno" placeholder="Enter your Phone No" /></td>
					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center>Father's Name</center>
						</td>
						<td><input type="text" name="fathername" placeholder="Enter your Father's Name" /></td>
						<td>
							<center>Father's Phone No</center>
						</td>
						<td><input type="int" name="fatherno" placeholder="Enter your father's Phone No" /></td>
					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center>Branch</center>
						</td>
						<td><input type="text" name="branch" placeholder="Enter your branch" /></td>
						<td align="center">Upload Profile</td>
						<td><input type="file" name="img1" /></td>

					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center>Username</center>
						</td>
						<td><input type="text" name="username" placeholder="Type your username" /></td>
						<td>
							<center>Password</center>
						</td>
						<td><input type="password" name="password" placeholder="Type your password" /></td>
					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center>Address</center>
						</td>
						<td><textarea name="address" id="address" cols="23" rows="1" placeholder="Type Your Address"></textarea></td>
					</span>
				</tr>
				<tr>
					<span>
						<td>
							<center><input type="submit" name="signup" value="Sign Up" style="background-color:#0067ffd9;font-size: larger;color:white;width:150px;height:40px;position:relative;top:5px;    margin-bottom: 2px;border-radius: 9px;
		position: relative;
		left: 24vw;" /></center>
						</td>
						<td>
							<center><a href="index.php"><input type="button" name="login" value="Login" style="background-color:#0067ffd9;font-size: larger;color:white;width:150px;height:40px;position:relative;top:5px;    margin-bottom: 2px;border-radius: 9px;
		position: relative;
		left: 26vw;" /></a></center>
						</td>
					</span>
				</tr>
			</table>
		</form>
	</div>


	<footer class="bg-light text-center text-lg-start fixed-bottom">
		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			© 2023 Copyright:
			<a class="text-dark" href="index.php">Institute ERP System.com</a>
		</div>
		<!-- Copyright -->
	</footer>
</body>

</html>

<?php
if (isset($_POST['signup'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$emailid = $_POST['emailid'];
	$phoneno = $_POST['phoneno'];
	$fathername = $_POST['fathername'];
	$fatherno = $_POST['fatherno'];
	$branch = $_POST['branch'];
	$img = $_FILES['img1']['name'];
	$temp_name = $_FILES['img1']['tmp_name'];
	$filepath = "admin/$img";
	move_uploaded_file($temp_name, $filepath);
	$username = $_POST['username'];
	$password = $_POST['password'];
	$address = $_POST['address'];
	$query2 = "insert into admin (firstname,lastname,gender,dob,emailid,phoneno,fathername,fatherno,branch,img,username,password,address) values('$firstname','$lastname','$gender','$dob','$emailid','$phoneno','$fathername','$fatherno','$branch','$img','$username','$password','$address')";
	$runquery2 = mysqli_query($con, $query2);
	if ($runquery2) {
		echo '<script>alert("Account has been Registered Successfully")</script>';
	}
}


?>