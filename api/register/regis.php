<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$password1 = mysqli_real_escape_string($db, $_POST['password1']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		if ($password != $password1) {
			array_push($errors, "Password is not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passwordX = md5($password);//encrypt the password before saving in the database
      $query = "INSERT INTO `users`(Username,Email,Password,Role)  VALUES
       ('$username','$email','$passwordX','personal')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Register successfully";
			header('location: ../../login.php');
		}else{
      header('location: ../../register.php');
    }

	}

?>
