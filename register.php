<?php
	// if(isset($_SESSION['userlogin'])){
	// 	header("Location: index.php");
	// }
	 include('api/register/regis.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Project</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>

<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<form enctype="multipart/form-data" action="api/register/regis.php" method="post">
					<div class="input-group mb-3">
							<div class="input-group-append">
							<h4>Register</h4>						
								</div>
							</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" id="username" class="form-control input_user" placeholder="Username" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" name="email" id="email" class="form-control input_user" placeholder="Email" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" id="password" class="form-control input_pass" placeholder="Password" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password1" id="password1" class="form-control input_pass" placeholder="Confirm password" required>
					</div>


			</div>
			<div class="d-flex justify-content-center mt-3 login_container">
				<button type="submit" name="reg_user" id="login" value="Submit" class="btn login_btn">Register</button>
			</div>
			</form>
			<div class="d-flex justify-content-center mt-2 login_container">
				<button type="button" onclick="window.location.href = 'login.php'" class="btn back_btn">Back</button>
			</div>

		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
