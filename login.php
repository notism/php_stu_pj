<?php
	session_start();

	if(isset($_SESSION['userlogin'])){
		header("Location: index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Project</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/login.png" class="brand_logo" alt="Programming Knowledge logo">
				</div>
			</div>
			<div class="d-flex justify-content-center form_container">
				<form >
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" id="username" placeholder="ชื่อผู้ใช้" class="form-control input_user" required>
					</div>
					<div class="input-group mb-3">
						<div class="input-group-append">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" id="password" placeholder="รหัสผ่าน" class="form-control input_pass" required>
					</div>


			</div>
			<div class="d-flex justify-content-center mt-1 login_container">
				<button type="button" name="button" id="login" class="btn login_btn">เข้าสู่ระบบ</button>
			</div>
			</form>
				<div class='dropdown-divider mt-3'></div>
				<div class="d-flex justify-content-center mt-3 login_container">
					<input class="btn btn-secondary btn-block" type="submit" name="Submit2" value="เข้าสู่ระบบโดย Guest" onclick='window.location.href="webOther/index.php"'>
				</div>
			<div class="mt-4">

				<!-- <div class="d-flex justify-content-center links">
					Don't have an account? <a href="register.php" class="ml-2">Sign Up</a>
				</div> -->
				<div class="d-flex justify-content-center">
					<a href="forgot_password.php">ลืมรหัสผ่านใช่หรือไม่?</a>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script>
$(function(){
		$('#login').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
				var username = $('#username').val();
				var password = $('#password').val();
			}
			e.preventDefault();
			$.ajax({
				type: 'POST',
				url: 'api/login/check.php',
				data:  {username: username, password: password},
				success: function(data){
					// alert(data);
					if($.trim(data) === "admin"){
						setTimeout(' window.location.href =  "webAdmin/index.php"', 1000);
					}else if($.trim(data) === "student"){
						setTimeout(' window.location.href =  "webStudent/index.php"', 1000);
					}else if($.trim(data) === "advisor"){
						setTimeout(' window.location.href =  "webAdvisor/index.php"', 1000);
					}else if($.trim(data) === "personal"){
						setTimeout(' window.location.href =  "webOther/index.php"', 1000);
					}else {
						setTimeout(' window.location.href =  "index.php"', 1000);
					}
				},
				error: function(data){
					alert('there were erros while doing the operation.');
				}
			});
		});
	});
</script>
</body>
</html>
