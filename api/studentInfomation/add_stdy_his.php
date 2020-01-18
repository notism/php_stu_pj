<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database



	if (isset($_POST['add_stdy_his'])) {
		// receive all input values from the form
		$SchoolName = mysqli_real_escape_string($db, $_POST['SchoolName']);
		$Level = mysqli_real_escape_string($db, $_POST['Level']);
		$Qualification = mysqli_real_escape_string($db, $_POST['Qualification']);
		$Time = mysqli_real_escape_string($db, $_POST['Time']);

		if (count($errors) == 0) {
      $createdBy = $_SESSION['userlogin']["Id"];

      $query = "INSERT INTO `studyhistory`(SchoolName,Level,Qualification,Time,CreatedBy)  VALUES
       ('$SchoolName','$Level','$Qualification','$Time','$createdBy')";
			// mysqli_query($db, $query);

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
