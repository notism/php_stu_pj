<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['edit_1'])) {
		// receive all input values from the form
    $Id = mysqli_real_escape_string($db, $_POST['Id']);
		$SchoolName = mysqli_real_escape_string($db, $_POST['SchoolName']);
		$Level = mysqli_real_escape_string($db, $_POST['Level']);
		$Qualification = mysqli_real_escape_string($db, $_POST['Qualification']);
    $Time = mysqli_real_escape_string($db, $_POST['Time']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE studyhistory SET SchoolName='$SchoolName',Level='$Level',Qualification='$Qualification',Time='$Time' WHERE Id='$Id'";
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
