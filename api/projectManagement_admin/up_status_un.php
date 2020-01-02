<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['update_status3'])) {
		// receive all input values from the form
    $projectId = mysqli_real_escape_string($db, $_POST['projectId3']);

		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE projectinfo SET Status='อนุมัติแล้ว' WHERE Id='$projectId'";

			mysqli_query($db, $query);
			$_SESSION['success'] = "success";
			header('location: ../../webAdmin/projectManagement.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webAdmin/projectManagement.php');
    }

	}

?>
