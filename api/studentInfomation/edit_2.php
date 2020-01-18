<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database


	// ADD USER
	if (isset($_POST['edit_2'])) {
		// receive all input values from the form
    $Id = mysqli_real_escape_string($db, $_POST['Id2']);
		$Header = mysqli_real_escape_string($db, $_POST['Header2']);
		$Organize = mysqli_real_escape_string($db, $_POST['Organize2']);
    $Time = mysqli_real_escape_string($db, $_POST['Time2']);



		// register user if there are no errors in the form
		if (count($errors) == 0) {
      $query = "UPDATE trianninghistory SET Header='$Header',Organize='$Organize',Time='$Time' WHERE Id='$Id'";
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
