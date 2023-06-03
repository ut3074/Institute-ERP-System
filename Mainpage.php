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
		Front end Back end
	</title>
</head>

<body>
	<nav class="navbar p-0 m-0" style="background-color: #e9ecef;">
		<div class="container-fluid">
			<a class="navbar-brand" href="#">
				<img src="./logo\logo.png" alt="Logo" width="50vw" height="40vh" class="d-inline-block align-text-top">
			</a>
		</div>
	</nav>
	
	<?php
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		$query13 = "select * from admin where username='$username'";
		$runquery13 = mysqli_query($con, $query13);
		$rowdata = mysqli_fetch_array($runquery13);
		$firstname = $rowdata['firstname'];
		$lastname = $rowdata['lastname'];
		$gender = $rowdata['gender'];
		$dob = $rowdata['dob'];
		$emailid = $rowdata['emailid'];
		$phoneno = $rowdata['phoneno'];
		$fathername = $rowdata['fathername'];
		$fatherno = $rowdata['fatherno'];
		$branch = $rowdata['branch'];
		$username = $rowdata['username'];
		$img = $rowdata['img'];
		$address = $rowdata['address'];}?>
		<section style="background-color: #eee;">
		<div class="container py-5">
		  <div class="row">
			<div class="col">
			  <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
				<ol class="breadcrumb mb-0">
				  <li class="breadcrumb-item"><a href="">Home</a></li>
				  <li class="breadcrumb-item"><a href="#">User</a></li>
				  <li class="breadcrumb-item active" aria-current="page">User Profile</li>
				</ol>
				<td>
					<center><a href="index.php"><input type="button" name="login" value="Log Out" style="background-color:#000000;font-size: larger;color:white;width:150px;height:40px;position:relative; margin-left:200px; margin-bottom: 0px;border-radius: 9px;position: relative;
		left: 26vw;" /></a></center>
						</td>
			  </nav>
			</div>
		  </div>

		  <div class="row">
			<div class="col-lg-4">
			  <div class="card mb-4">
				<div class="card-body text-center">
				  <img src=<?php echo"admin/$img"?> alt="avatar"
					class="rounded-circle img-fluid" style="width: 550px; height: 350px;">

				  <h5 class="my-3"><?php echo"$firstname $lastname"?></h5>
				  <div class="d-flex justify-content-center mb-2">
				  </div>
				</div>
			  </div>

			</div>
			<?php ?>
			<div class="col-lg-8">
			  <div class="card mb-4">
				<div class="card-body">
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Full Name</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$firstname $lastname"?></p>
					</div>
				  </div>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Email</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$emailid"?></p>
					</div>
				  </div>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Phone</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$phoneno"?></p>
					</div>
				  </div>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Branch</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$branch"?></p>
					</div>
				  </div>
				  <hr>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Father Name</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$fathername"?></p>
					</div>
				  </div>
				  <hr>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Father's Number</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$fatherno"?></p>
					</div>
				  </div>
				  <hr>
				  <div class="row">
					<div class="col-sm-3">
					  <p class="mb-0">Address</p>
					</div>
					<div class="col-sm-9">
					  <p class="text-muted mb-0"><?php echo"$address"?></p>
					</div>
				  </div>
				</div>
			  </div>
			 
			  </div>
			</div>
		  </div>
		</div>
	  </section>































	<tr>
	<td>Firstname : </td>
	<td>$firstname</td>
	</tr>


	<tr>
	<td>Lastname : </td>
	<td>$lastname</td>
	</tr>
	

	<tr>
	<td>Gender : </td>
	<td>$gender</td>
	</tr>
	

	<tr>
	<td>Date Of Birth : </td>
	<td>$dob</td>
	</tr>
	

	<tr>
	<td>Email ID : </td>
	<td>$emailid</td>
	</tr>


	<tr>
	<td>Phone Number : </td>
	<td>$phoneno</td>
	</tr>


	<tr>
	<td>Father name : </td>
	<td>$fathername</td>
	</tr>
	

	<tr>
	<td>Father's Number : </td>
	<td>$fatherno</td>
	</tr>
	
	
	<tr>
	<td>Branch Selected : </td>
	<td>$branch</td>
	</tr>
	
	
	<tr>
	<td>Username : </td>
	<td>$username</td>
	</tr>
	

	<tr>
	<td>Image</td>
	<td><img src='admin/$img'/></td>
	</tr>
	

	<tr>
	<td>Address : </td>
	<td>$address</td>
	</tr>
	} else {
		echo "Welcome admin";
	}
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