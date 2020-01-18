<?php
	session_start();
	include('../../config/connect.php');
	// variable declaration
	$username = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database



	if (isset($_POST['add_skills'])) {
		// receive all input values from the form
		$Type = mysqli_real_escape_string($db, $_POST['Type']);
		$Skills = mysqli_real_escape_string($db, $_POST['Skills']);

		if (count($errors) == 0) {
      $createdBy = $_SESSION['userlogin']["Id"];

      $query = "INSERT INTO `skills`(skills,Type,CreatedBy)  VALUES
       ('$Skills','$Type','$createdBy')";
		

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
