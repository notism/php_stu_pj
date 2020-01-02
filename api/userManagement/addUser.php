<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$email    = "";
  $role    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['add_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
		$prefix = mysqli_real_escape_string($db, $_POST['prefix']);
		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $role = mysqli_real_escape_string($db, $_POST['role']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }
    if (empty($role)) { array_push($role, "Role is required"); }


		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $createdBy = $_SESSION['userlogin']["Username"];
			$passwordX = md5($password);//encrypt the password before saving in the database
			// user Info
			$queryInfo = "INSERT INTO `profile`(CreatedBy)  VALUES
       ('$username')";
			mysqli_query($db, $queryInfo);
			// users
      $query = "INSERT INTO `users`(Username,Email,Password,Role,CreatedBy,Prefix,Firstname,Lastname)  VALUES
       ('$username','$email','$passwordX','$role','$createdBy','$prefix','$firstname','$lastname')";
			mysqli_query($db, $query);
			$_SESSION['success'] = "success";
			header('location: ../../webAdmin/userManagement.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdmin/userManagement.php');
    }

	}

?>
