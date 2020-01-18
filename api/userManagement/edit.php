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
	if (isset($_POST['edit_user'])) {
		// receive all input values from the form
    $userId = mysqli_real_escape_string($db, $_POST['userId']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
    $role = mysqli_real_escape_string($db, $_POST['role']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passwordX = md5($password);//encrypt the password before saving in the database

			if($role==null){
				$query = "UPDATE users SET Email='$email',Password='$passwordX' WHERE Id='$userId'";
			}else{
				$query = "UPDATE users SET Email='$email',Password='$passwordX',Role='$role' WHERE Id='$userId'";
			}

			if (!mysqli_query($db, $query)) {
				header('location: ../../webAdmin/userManagement.php?edit="fail"');
			}else {
				header('location: ../../webAdmin/userManagement.php?edit="success"');
			}
		}else{
      header('location: ../../webAdmin/userManagement.php?edit="fail"');
    }

	}

?>
