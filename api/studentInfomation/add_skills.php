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
			mysqli_query($db, $query);

			$_SESSION['success'] = "success";
      header('location: ../../webStudent/stdInfo.php');
		}else{
      $_SESSION['success'] = "fail";
      header('location: ../../webStudent/stdInfo.php');
    }

	}

?>
