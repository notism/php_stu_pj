<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['edit_3'])) {
		// receive all input values from the form
    $Id = mysqli_real_escape_string($db, $_POST['Id']);
		$Type = mysqli_real_escape_string($db, $_POST['Type']);
		$Skills = mysqli_real_escape_string($db, $_POST['Skills']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE skills SET Type='$Type',Skills='$Skills' WHERE Id='$Id'";
			if (!mysqli_query($db, $query)) {
					header('location: ../../webStudent/stdInfo.php?res="fail"');
			}else {
				header('location: ../../webStudent/stdInfo.php?res="success"');
			}
		}else{
			header('location: ../../webStudent/stdInfo.php?res="fail"');
		}

	}

?>
