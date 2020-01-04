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
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
		$faculty = mysqli_real_escape_string($db, $_POST['faculty']);
		$department = mysqli_real_escape_string($db, $_POST['department']);
    $prefix = mysqli_real_escape_string($db, $_POST['prefix']);
		$tel = mysqli_real_escape_string($db, $_POST['tel']);




		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$passwordX = md5($password);//encrypt the password before saving in the database
      $query = "UPDATE users SET Email='$email',Password='$passwordX',Prefix='$prefix',Firstname='$firstname',Lastname='$lastname' WHERE Username='$username'";
			mysqli_query($db, $query);

      $query2 = "UPDATE profile SET Tel='$tel',Department='$department',Faculty='$faculty' WHERE CreatedBy='$username'";
      mysqli_query($db, $query2);

			$_SESSION['success'] = "success";
			header('location: ../../webAdvisor/profileManagement.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdvisor/profileManagement.php');
    }

	}

?>
